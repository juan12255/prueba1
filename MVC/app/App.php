<?php

class App{

    public function __construct()
    {
        $url = $_GET['url'] ?? "";
        $url = rtrim($url, "/");
        $url = explode('/', $url);

        if(empty($url[0])){
            require_once 'controller/Principal.controlador.php';
            $principal = new PrincipalControlador();
            $principal ->inicio();
            return;
        }

        $rutaArchivoControlador = "controller/".ucfirst($url[0]).".controlador.php";
        if(!file_exists($rutaArchivoControlador)){
            require_once 'controller/Principal.controlador.php';
            $principal = new PrincipalControlador();
            $principal ->defecto();
            return;
        }

        require $rutaArchivoControlador;

        $nombreControlador = ucfirst($url[0])."Controlador";
        $controlador = new $nombreControlador;

        if(count($url)==1){
            $controlador->inicio();
        }

        if(count($url)==2){
            if(!method_exists($controlador, $url[1])){
                require_once 'controller/Principal.controlador.php';
                $principal = new PrincipalControlador();
                $principal ->defecto();
                return;
            }

            $controlador->{$url[1]}();
        }
    }
}