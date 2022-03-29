<div class="container">
    <div class="column is-12">
        <h1 class="title is-1 has-text-centered">Crear usuario </h1>
    </div>
    <form class="card card-content mt-6 column is-7 mx-auto p-4" method="POST" action="<?php echo APP_URL; ?>/Producto/almacenar">
        <div class="field">
            <label class="label" for="cedula">Tipo de Producto</label>
            <div class="control">
                <input class="input" type="text" name="cedula" placeholder="Text input">
            </div>
        </div>
        <div class="field">
            <label class="label" for="nombre">Nombre del Producto</label>
            <div class="control">
                <input class="input" type="text" name="nombre" placeholder="Text input">
            </div>
        </div>
</div>
</form>
</div>