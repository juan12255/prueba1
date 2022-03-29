<?php

class Productocontrolador extends Controlador{

    public function __construct()
    {
        parent:: __construct();
        $this->cargarModelo("Producto");
    }

    public function inicio(){
        $producto =  new Producto("","","","");
        $productos = $producto->listarTodos();
        $this->vista->productos = $productos;
        $this->vista->mostrar('producto/index');
    }

    public function crear()
    {
        $this->vista->mostrar('producto/Crear');
    }


    public function almacenar()
    {
        $id = "";
        $tproducto = $_POST['tproducto']?? "";
        $nproducto = $_POST['nproducto']?? "";
        $producto = new Producto($id,$tproducto,$nproducto);
        $producto->guardar();
        echo "Guardado";
    }

    public function modificar()
    {
        $id = "";
        $tproducto = $_POST['tproducto']?? "";
        $nproducto = $_POST['nproducto']?? "";
        $producto = new Producto($id,$tproducto,$nproducto);
        $producto->modificar($tproducto,$nproducto);
        echo "Producto eliminado";
    }
}