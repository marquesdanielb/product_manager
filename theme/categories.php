<?php $v->layout("_theme"); ?>

<!-- Main Content -->
<main class="content">
  <div class="header-list-page">
    <h1 class="title">Categories</h1>
    <a href="<?php echo url("adicionar-categoria");?>" class="btn-action">Add new Category</a>
  </div>
  <table class="data-grid">
     <tr class="data-row">
      <th class="data-grid-th">
          <span class="data-grid-cell-content">Name</span>
      </th>
      <th class="data-grid-th">
          <span class="data-grid-cell-content">Code</span>
      </th>
      <th class="data-grid-th">
          <span class="data-grid-cell-content">Actions</span>
      </th>
     </tr>
     <?php foreach ($list as $category): ?>
     <tr class="data-row">
       <td class="data-grid-td">
          <span class="data-grid-cell-content"><?php echo $category->name; ?></span>
       </td>
       <td class="data-grid-td">
          <span class="data-grid-cell-content"><?php echo $category->code; ?></span>
       </td>
       <td class="data-grid-td">
         <div class="actions">
           <div class="action edit">
             <span>
               <a href="<?php echo url("editar-categoria/$category->id"); ?>">Edit</a>
             </span>
           </div>
           <div class="action delete">
             <span>
               <a href="<?php echo url("categoria/$category->id"); ?>">Delete</a>
             </span>
           </div>
         </div>
       </td>
     </tr>
     <?php endforeach; ?>
  </table>
</main>
<!-- Main Content -->
