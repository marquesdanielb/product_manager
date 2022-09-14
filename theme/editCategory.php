<?php $v->layout("_theme"); ?>

<!-- Main Content -->
<main class="content">
  <h1 class="title new-item">Edit Category</h1>
  
  <form action="<?php echo url("editar-categoria/$category->id"); ?>" method="post" enctype="multipart/form-data">
    <div class="input-field">
      <label for="category-name" class="label">Name</label>
      <input type="text" id="name" name="name" class="input-text" placeholder="<?php echo $category->name; ?>"/>
      
    </div>
    <div class="input-field">
      <label for="category-code" class="label">Code</label>
      <input type="text" id="code" name="code" class="input-text" placeholder="<?php echo $category->code; ?>"/>
    </div>
    <div class="actions-form">
      <a href="<?php echo url("categoria"); ?>" class="action back">Back</a>
      <input class="btn-submit btn-action"  type="submit" value="Save" />
    </div>
  </form>
</main>
<!-- Main Content -->
