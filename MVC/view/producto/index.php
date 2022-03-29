<div class="container">
    <div class="colum is-12"> 
        <h1 class="title is-1">Lista de productos</h1>
    </div>
    <div class="colum is-12">
        <div class="table">
            <thead>
                <tr>
                    <th>tipo de Producto</th>
                    <th>Nombre Producto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($this->productos as $producto){?>
                    <tr>
                        <th><?php echo $producto->tproducto?></th>
                        <th><?php echo $producto->nproducto?></th>
                    </tr>
                    <?php } ?>
            </tbody>
        </div>

    </div>
</div>