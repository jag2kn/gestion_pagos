<?php
// src/Ticket/VentasBundle/Form/LoginForm.php
namespace Ticket\VentasBundle\Form;


class LoginForm
{
	protected $usuario;
	protected $clave;
	public function getUsuario()
	{
		return $this->usuario;
	}
	public function setUsuario($usuario)
	{
		$this->usuario = $usuario;
	}
	public function getClave()
	{
		return $this->clave;
	}
	public function setClave($clave = null)
	{
		$this->clave = $clave;
	}
}
