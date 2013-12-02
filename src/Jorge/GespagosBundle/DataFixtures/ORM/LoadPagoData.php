<?php
// src/Jorge/GespagosBundle/DataFixtures/ORM/LoadUserData.php

namespace Jorge\GespagosBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Jorge\GespagosBundle\Entity\Usuario;
use Jorge\GespagosBundle\Entity\Pagos;

class LoadPagosData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface
{

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
    
    	$pagos = array("Universidad", "Luz", "Telefono", "Agua", "Celular", "Internet");
    	$periodos = array('semanal', 'quincenal', 'mensual', 'bimensual', 'semestral');
    	
	    	
    
    
		for($i=0;$i<100;$i++){
		
	    	$nombrepago = $pagos[array_rand($pagos, 1)];
	    	$periodo = $periodos[array_rand($periodos, 1)];
		
		
			$pago = new Pagos();

			$pago->setNombre($nombrepago);
			// Un apartamento entre 100 y 900 y entre 10 y 35 cada uno
			$pago->setDescripcion($nombrepago." APTO ".((rand(1,9)*100)+rand(10,35)));
			$pago->setMonto(rand(500000,8000000));
			$pago->setConstante(rand(0,1));
			$pago->setPeriodo($periodo);
			//$pago->setPagoRealizado(0); // Null
			//$pago->setFechaPago();  // Null
			$pago->setCreacion(new \Datetime());
			$pago->setActualizacion(new \Datetime());
			
			$idUsuario = intval($i/10);
			$usuario = $this->getReference('usuario_'.$idUsuario);
			
			$pago->setIdusuario($usuario);

			$manager->persist($pago);
			$manager->flush();
		}
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
