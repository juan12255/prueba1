<?php

class Productocontrolador extends Controlador{

    public function __construct()
    {
        parent:: __construct();
        $this->cargarModelo("Producto");
    }

    public function inicio(){
        $usuario =  new Producto("","","","");
        $usuarios = $usuario->listarTodos();
        $this->vista->usuarios = $usuarios;
        $this->vista->mostrar('producto/index');
    }

    public function crear()
    {
        $this->vista->mostrar('producto/Crear');
    }

    public function almacenar()
    {
        $tproducto = $_POST['tproducto']?? "";
        $nproducto = $_POST['nproducto']?? "";
        $producto = new Producto($tproducto,$nproducto);
        $producto->guardar();

        echo "Guardado";
    }
}