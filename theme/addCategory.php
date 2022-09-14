<?php $v->layout("_theme"); ?>

<!-- Main Content -->
<main class="content">
  <h1 class="title new-item">New Category</h1>
  
  <form action="<?php echo url("adicionar-categoria"); ?>" method="post" enctype="multipart/form-data">
    <div class="input-field">
      <label for="category-name" class="label">Category Name</label>
      <input type="text" id="name" name="name" class="input-text" />
      
    </div>
    <div class="input-field">
      <label for="category-code" class="label">Category Code</label>
      <input type="text" id="code" name="code" class="input-text" />
    </div>
    <div class="actions-form">
      <a href="<?php echo url("categoria"); ?>" class="action back">Back</a>
      <input class="btn-submit btn-action"  type="submit" value="Save" />
    </div>
  </form>
</main>
<!-- Main Content -->
