<?php $v->layout("_theme"); ?>

<main class="content">
    <h1>Delete:</h1>
    <div class="infor">
        Back to category's list: <a href="<?php echo url("categoria"); ?>" class="btn-action">Lista de Categorias</a>
    </div>
    <p>You deleted category (id): <?php echo $category->id; ?></p>
</main>