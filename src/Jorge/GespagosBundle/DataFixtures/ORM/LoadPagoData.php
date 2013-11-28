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
		$pago = new Pagos();

		$pago->setNombre("POLI 2013-II");
		$pago->setDescripcion("Semestre 2013-II");
		$pago->setMonto(4000000);
		$pago->setConstante(1);
		$pago->setPeriodo("semestral");
		//$pago->setPagoRealizado(0); // Null
		//$pago->setFechaPago();  // Null
		$pago->setCreacion(new \Datetime());
		$pago->setActualizacion(new \Datetime());
		$pago->setIdusuario($this->getReference('usuario'));

		$manager->persist($pago);
		$manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}
