<div class="container">
    <div class="column is-12">
        <h1 class="title is-1 has-text-centered">Crear usuario </h1>
    </div>
    <form class="card card-content mt-6 column is-5 mx-auto p-4" method="POST" action="<?php echo APP_URL; ?>/Producto/almacenar" >
        <div class="mb-3">
            <label for="" class="">Tipo de producto</label>
            <input type="text" class="form-control" id="tproducto" name="tproducto">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nproducto" name="nproducto">
            <br>
            </div>
            <button type="submit" class="btn btn-primary">guardar</button>
        </div>
        </div>

      
    </form>
</div>