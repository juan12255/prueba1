<?php

class Producto extends Modelo
{
    public $tproducto;
    public $nproducto;

    public function __construct($tproducto, $nproducto)
    {
        parent:: __construct();
        $this->tproducto = $tproducto;
        $this->nproducto = $nproducto;
    }

    public function crerar()
    {
        try
        {
            $query ="INSERT INTO productos(tproductos,nproductos) VALUES (:tproductos, :nproductos)";
            $consulta = $this->conexion->prepare($query);
            $consulta->execute([":tproductos"=>$this->tproducto,":nproducto"=>$this->nproducto]);
        }catch(PDOException $error)
        {
            die("Error al crear el producto:".$error->getMessage() . DB_NOMBRE);

        }
    }
    public function modificar($tproducto,$nproducto)
    {
        try
        {
            $query = "UPDATE productos SET tproducto='$tproducto', nproducto='$nproducto'";
            $consulta = $this->conexion->prepare($query);
            $consulta->execute([":tproductos"=>$this->tproducto,":nproducto"=>$this->nproducto]);
        }catch(PDOException $error)
        {
            die("Error al modificar el producto:".$error->getMessage() . DB_NOMBRE);

        }
    }
    public function eliminar($tproducto,$nproducto)
    {
        try
        {
            $query = "DELETE FROM productos WHERE tproducto ='$tproducto', nproducto='$nproducto'";
            $consulta = $this->conexion->prepare($query);
            $consulta->execute([":tproductos"=>$this->tproducto,":nproducto"=>$this->nproducto]);
        }catch(PDOException $error)
        {
            die("Error al eliminar el producto:".$error->getMessage() . DB_NOMBRE);

        }
    }

    public function listarTodos()
    {
        try
        {
            $query = "SELECT * FROM productos";
            $data = $this->conexion->query($query,PDO::FETCH_ASSOC);
            $productos = [];
            foreach ($data as $row) {
                $producto = new Producto($row['tproducto'],$row['nproducto']);
                array_push($productos,$producto);
            }
            return $productos;
        }catch(PDOException $error)
        {
            die ("Error, no se pudo listar el usuario". $error->getMessage());
        }
    }



}