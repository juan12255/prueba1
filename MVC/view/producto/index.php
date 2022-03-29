<div class="container">
    <div class="colum is-12">
        <h1 class="title is-1">Lista de productos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tipo de producto</th>
                    <th scope="col">Nombre del producto</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php foreach ($this->productos as $producto) { ?>
                    <tr>
                        
                        <th><?php echo $producto->id ?></th>
                        <th><?php echo $producto->tproducto ?></th>
                        <th><?php echo $producto->nproducto ?></th>
                        <button type="submit" class="btn btn-primary" method="POST" action="<?php echo APP_URL; ?>/Producto/modificar">Modificar</button>
                        <button type="submit" class="btn btn-primary" method="POST" action="<?php echo APP_URL; ?>/Producto/eliminar">Eliminar</button>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
