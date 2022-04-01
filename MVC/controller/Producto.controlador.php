<?php

class Productocontrolador extends Controlador
{

    public function __construct()
    {
        parent::__construct();
        $this->cargarModelo("Producto");
    }

    public function inicio()
    {
        $producto =  new Producto("", "", "", "");
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
        $tproducto = $_POST['tproducto'] ?? "";
        $nproducto = $_POST['nproducto'] ?? "";
        $producto = new Producto($id, $tproducto, $nproducto);
        $producto->guardar();
        $producto = new Producto("", "", "", "");
        $productos = $producto->listarTodos();
        $this->vista->productos = $productos;
        $this->vista->mostrar('producto/index');
    }

    public function Modificar()
    {
        $producto =  new Producto("", "", "", "");
        $productos = $producto->consulta();
        $this->vista->productos = $productos;
        $this->vista->mostrar('producto/editar');
    }


    public function Actualizar()
    {
        $id = $_POST['id'] ?? "";
        $tproducto = $_POST['tproducto'] ?? "";
        $nproducto = $_POST['nproducto'] ?? "";

        $producto = new Producto($id, $tproducto, $nproducto);
        $producto->modificar();

        $producto = new Producto("", "", "", "");
        $productos = $producto->listarTodos();
        $this->vista->productos = $productos;
        $this->vista->mostrar('producto/index');
    }
    public function borrar()
    {
        $producto = new Producto("", "", "", "");
        $productos = $producto->consulta();
        $this->vista->productos = $productos;
        $this->vista->mostrar('producto/eliminar');
    }

    public function Eliminar()
    {
        $id = $_POST['id'] ?? "";
        $tproducto = $_POST['tproducto'] ?? "";
        $nproducto = $_POST['nproducto'] ?? "";

        $producto = new Producto($id, $tproducto, $nproducto);
        $producto->delete();

        $producto = new Producto("", "", "", "");
        $productos = $producto->listarTodos();
        $this->vista->productos = $productos;
        $this->vista->mostrar('producto/index');
    }
}
