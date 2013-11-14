<?php

namespace Jorge\GespagosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagos
 *
 * @ORM\Table(name="pagos")
 * @ORM\Entity
 */
class Pagos
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=128, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="periodo", type="string", length=32, nullable=false)
     */
    private $periodo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="constante", type="boolean", nullable=false)
     */
    private $constante;

    /**
     * @var integer
     *
     * @ORM\Column(name="monto", type="integer", nullable=false)
     */
    private $monto;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actualizacion", type="datetime", nullable=false)
     */
    private $actualizacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creacion", type="datetime", nullable=false)
     */
    private $creacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Pagos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set periodo
     *
     * @param string $periodo
     * @return Pagos
     */
    public function setPeriodo($periodo)
    {
        $this->periodo = $periodo;
    
        return $this;
    }

    /**
     * Get periodo
     *
     * @return string 
     */
    public function getPeriodo()
    {
        return $this->periodo;
    }

    /**
     * Set constante
     *
     * @param boolean $constante
     * @return Pagos
     */
    public function setConstante($constante)
    {
        $this->constante = $constante;
    
        return $this;
    }

    /**
     * Get constante
     *
     * @return boolean 
     */
    public function getConstante()
    {
        return $this->constante;
    }

    /**
     * Set monto
     *
     * @param integer $monto
     * @return Pagos
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    
        return $this;
    }

    /**
     * Get monto
     *
     * @return integer 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Pagos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set actualizacion
     *
     * @param \DateTime $actualizacion
     * @return Pagos
     */
    public function setActualizacion($actualizacion)
    {
        $this->actualizacion = $actualizacion;
    
        return $this;
    }

    /**
     * Get actualizacion
     *
     * @return \DateTime 
     */
    public function getActualizacion()
    {
        return $this->actualizacion;
    }

    /**
     * Set creacion
     *
     * @param \DateTime $creacion
     * @return Pagos
     */
    public function setCreacion($creacion)
    {
        $this->creacion = $creacion;
    
        return $this;
    }

    /**
     * Get creacion
     *
     * @return \DateTime 
     */
    public function getCreacion()
    {
        return $this->creacion;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \Jorge\GespagosBundle\Entity\Usuario
     */
    private $idUsuario;


    /**
     * Set idUsuario
     *
     * @param \Jorge\GespagosBundle\Entity\Usuario $idUsuario
     * @return Pagos
     */
    public function setIdUsuario(\Jorge\GespagosBundle\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;
    
        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \Jorge\GespagosBundle\Entity\Usuario 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    /**
     * @var integer
     */
    private $pagoRealizado;

    /**
     * @var \DateTime
     */
    private $fechaPago;


    /**
     * Set pagoRealizado
     *
     * @param integer $pagoRealizado
     * @return Pagos
     */
    public function setPagoRealizado($pagoRealizado)
    {
        $this->pagoRealizado = $pagoRealizado;
    
        return $this;
    }

    /**
     * Get pagoRealizado
     *
     * @return integer 
     */
    public function getPagoRealizado()
    {
        return $this->pagoRealizado;
    }

    /**
     * Set fechaPago
     *
     * @param \DateTime $fechaPago
     * @return Pagos
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;
    
        return $this;
    }

    /**
     * Get fechaPago
     *
     * @return \DateTime 
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }
}