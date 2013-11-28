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
		$usuario = new Usuario();

		$encoder = $this->container
			->get('security.encoder_factory')
			->getEncoder($usuario)
		;
    
		$usuario->setUsuario('jorge');
		$usuario->setClave($encoder->encodePassword("123456", ""));
		$usuario->setNombres('Jorge');
		$usuario->setApellidos('Gonzalez');
		$usuario->setFecha(new \Datetime());
		$usuario->setCorreo("jag2kn@gmail.com");

		$usuario->setSalt("");

        $this->addReference('usuario', $usuario);

		$manager->persist($usuario);
		$manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}
