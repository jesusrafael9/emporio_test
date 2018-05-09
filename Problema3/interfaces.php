<?php
namespace App\Interfaces;

interface Aceite
{
	
}
interface Motor
{
    public function encender();
    public function apagar();
    public function cambiarAceite(Aceite $aceite);
}