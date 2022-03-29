<?php

class Vista{

    public function __construct()
    {
        
    }


    public function mostrar ($rutaarchivo){

        require_once 'view/plantilla/cabeza.php';
        require_once 'view/plantilla/menu.php';
        require_once 'view/'.$rutaarchivo.".php";
        require_once 'view/plantilla/pie.php';
    }
}