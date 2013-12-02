<?php
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Jorge\GespagosBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jorge\GespagosBundle\Entity\Usuario;

class LoadUsuarioData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
	    //https://github.com/olea/lemarios/blob/master/nombres-propios-es.txt
	    
    	$nombres = explode("\n",file_get_contents("https://raw.github.com/olea/lemarios/master/nombres-propios-es.txt"));
    	$apellidos = explode("\n",file_get_contents("https://raw.github.com/olea/lemarios/master/apellidos-es.txt"));
    	
    	//echo $nombres;
		//\Doctrine\Common\Util\Debug::dump($nombres);
		
    
	    for($i=0;$i<10;$i++){
	    	$idnombre = array_rand($nombres, 1);
	    	$idapellido = array_rand($apellidos, 1);
	    	
	    	$nombre = $nombres[$idnombre];
	    	$apellido = $apellidos[$idapellido];
		
			$usuario = new Usuario();

			$encoder = $this->container
				->get('security.encoder_factory')
				->getEncoder($usuario)
			;
			
			$nombreusuario = strtolower($nombre{0}).strtolower($apellido);
			$usuario->setUsuario($nombreusuario);
			$usuario->setClave($encoder->encodePassword("A".$nombreusuario."*", ""));
			$usuario->setNombres($nombre);
			$usuario->setApellidos($apellido);
			$usuario->setFecha(new \Datetime());
			$usuario->setCorreo($nombreusuario."@poli.edu.co");

			$usuario->setSalt("");

		    $this->addReference('usuario_'.$i, $usuario);

			$manager->persist($usuario);
			$manager->flush();
		}
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
