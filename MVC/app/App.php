<?php

class App{


    public function __construct()
    {
        require_once './controller/Principal.controlador.php';
        $principal = new PrincipalControlador();
    }
}