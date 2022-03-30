<?php

class Principalcontrolador extends Controlador{

    public function __construct()
    {
        parent:: __construct();
    }

    public function inicio(){
        $this->vista->mostrar("principal/index");
        
    }
    public function defecto(){
        $this->vista->mostrar("principal/defecto");
        
    }
}