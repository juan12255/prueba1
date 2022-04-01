<?php

class Producto extends Modelo
{
    public $id;
    public $tproducto;
    public $nproducto;

    public function __construct($id,$tproducto, $nproducto)
    {
        parent:: __construct();
        $this->id= $id;
        $this->tproducto = $tproducto;
        $this->nproducto = $nproducto;
    }

    public function guardar()
    {
        try
        {
            $query ="INSERT INTO productos(tproducto,nproducto) VALUES (:tproducto, :nproducto)";
            $consulta = $this->conexion->prepare($query);
            $consulta->execute([":tproducto"=>$this->tproducto,":nproducto"=>$this->nproducto]);
        }catch(PDOException $error)
        {
            die("Error al crear el producto:".$error->getMessage() . DB_NOMBRE);

        }
    }

    public function consulta(){
        try {
              $query = "SELECT * FROM productos WHERE id=".$_GET['id'];
              $data = $this->conexion->query($query,PDO::FETCH_ASSOC);
              $productos =[];
              foreach($data as $row){
                  $producto = new Producto($row['id'],$row['tproducto'],$row['nproducto']);
                  array_push($productos,$producto);
              }
              return $productos;
        }catch(PDOException $error){
            die("error no se pudo consultar el usuario".$error->getMessage());
        }
    }
    public function modificar()
    {
        try
        {
            $query = "UPDATE productos SET tproducto=:tproducto, nproducto=:nproducto WHERE id=:id";
            $consulta = $this->conexion->prepare($query);
            $consulta->execute([":tproducto"=>$this->tproducto,":nproducto"=>$this->nproducto,":id"=>$this->id]);
        }catch(PDOException $error)
        {
            die("Error al modificar el producto:".$error->getMessage() . DB_NOMBRE);

        }
    }
    public function delete()
    {
        try
        {
            $query = "DELETE FROM productos WHERE ID =:id";
            $consulta = $this->conexion->prepare($query);
            $consulta->execute([":id"=>$this->id]);
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
            if(isset($_POST['buscar'])){
                $query = $query." WHERE tproducto like '%".$_POST["buscar"]."%' OR nproducto like '%".$_POST["buscar"]."%'";
            }
            $data = $this->conexion->query($query,PDO::FETCH_ASSOC);
            $productos = [];
            foreach ($data as $row) {
                $producto = new Producto($row ['id'],$row['tproducto'],$row['nproducto']);
                array_push($productos,$producto);
            }
            return $productos;
        }catch(PDOException $error)
        {
            die ("Error, no se pudo listar el usuario". $error->getMessage());
        }
    }

}