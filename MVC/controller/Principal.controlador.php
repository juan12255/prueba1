<?php

class Principalcontrolador extends Controlador{

    public function __construct()
    {
        parent:: __construct();
    }

    public function inicio(){
        $this->vista->mostrar("principal/index");
        
    }
}