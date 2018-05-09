<?php
namespace App\Classes;
include('interfaces.php');

use App\Interfaces\Motor;
use App\Interfaces\Aceite;

class Auto implements Motor{

	public function encender()
	{
		echo "<br>Encender Auto";
	}
    public function apagar()
    {
    	echo "<br>Apagar Auto";
    }
    public function cambiarAceite(Aceite $aceite)
    {
    	echo "<br>Cambiar aceite Auto";
    }
}

class Avion implements Motor{
	public function encender()
	{
		echo "<br>Encender Avion";
	}
    public function apagar()
    {
    	echo "<br>Apagar Avion";
    }
    public function cambiarAceite(Aceite $aceite)
    {
    	echo "<br>Cambiar aceite Avion";
    }
}

class Barco implements Motor{
	private static $instancia;
	private $status_vehiculo;
	private function __construct()
	{
		$this->status_vehiculo = "Encendido";
	}

	public static function getInstance()
	{
		if (!self::$instancia instanceof self)
		{
			self::$instancia = new self;
		}
		return self::$instancia;
	}

	public function getStatus()
	{
		echo "<br>".$this->status_vehiculo;
	}

	public function encender()
	{
		echo "<br>Estado del Barco ".$this->status_vehiculo;
	}
    public function apagar()
    {
    	$this->status_vehiculo = "Apagado";
    	echo "<br>Estado del Barco ".$this->status_vehiculo;
    }
    public function cambiarAceite(Aceite $aceite)
    {
    	$this->status_vehiculo = "Cambio de aceite";
    	echo "<br>Estado del Barco ".$this->status_vehiculo;
    }
}

$auto = Barco::getInstance();
$auto->apagar();
$auto = Barco::getInstance();
$auto->getStatus();//probando el patron sigleton, manteniendo una solo instancia


