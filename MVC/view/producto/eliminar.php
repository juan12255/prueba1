<div class="container">
    <div class="colum is-12">
        <center>

            <h1 class="title is-1" style="margin: 10px;">Eliminar producto</h1>
        </center>
        <br>
        <hr>
    </div>
    <form class="card card-content mt-6 column is-5 mx-auto p-4" method="POST" action="<?php echo APP_URL; ?>/Producto/Eliminar">
        <?php foreach ($this->productos as $producto) {
        ?>

            <input class="input" type="hidden" name="id" value="<?php echo $producto->id; ?>">
            <table class="table table-dark table-striped">
                <tr>
                    <th>Tipo de producto</th>
                    <td><?php echo $producto->tproducto; ?></td>
                </tr>
                <tr>
                    <th>Nombre producto</th>
                    <td><?php echo $producto->nproducto; ?></td>
                </tr>

            </table>

            <div class="field is-grouped" style="margin: 10px;">

                <div class="control">
                    <center><button class="button is-link btn btn-danger">Eliminar</button></center>
                </div>
            </div>
        <?php } ?>
    </form>
</div>