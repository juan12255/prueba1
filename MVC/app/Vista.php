<?php

class Vista{

    public function __construct()
    {
        
    }


    public function mostrar ($rutaarchivo){

        require_once 'view/' . $rutaarchivo;
    }
}