<form class="card card-content mt-6 column is-5 mx-auto p-4" method="POST" action="<?php echo APP_URL; ?>/Producto/modificar">
    <?php foreach ($this->$productos as $producto) {
    ?>

        <div class="mb-3">
            <label for="" class="">id</label>
            <input type="text" class="form-control" id="tproducto" name="id" value="<?php echo $producto->id;?>">
        </div>

        <div class="mb-3">
            <label for="" class="">Tipo de producto</label>
            <input type="text" class="form-control" id="tproducto" name="tproducto" value="<?php echo $producto->id;?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nproducto" name="nproducto" value="<?php echo $producto->id;?>">
            <br>
        </div>
        <button type="submit" class="btn btn-primary">guardar</button>
        </div>
        </div>
    <?php } ?>


</form>