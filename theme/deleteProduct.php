<?php $v->layout("_theme"); ?>

<main class="content">
    <h1>Delete:</h1>
    <div class="infor">
        Back to products's list: <a href="<?php echo url("produto"); ?>" class="btn-action">Lista de Categorias</a>
    </div>
    <p>You deleted product (id): <?php echo $product->id; ?></p>
</main>