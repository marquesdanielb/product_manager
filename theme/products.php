<?php $v->layout("_theme"); ?>

<!-- Main Content -->
<main class="content">
  <div class="header-list-page">
    <h1 class="title">Products</h1>
    <a href="<?php echo url("adicionar-produto"); ?>" class="btn-action">Add new Product</a>
  </div>
  <table class="data-grid">
    <tr class="data-row">
      <th class="data-grid-th">
          <span class="data-grid-cell-content">Name</span>
      </th>
      <th class="data-grid-th">
          <span class="data-grid-cell-content">SKU</span>
      </th>
      <th class="data-grid-th">
          <span class="data-grid-cell-content">Price</span>
      </th>
      <th class="data-grid-th">
          <span class="data-grid-cell-content">Quantity</span>
      </th>
      <th class="data-grid-th">
          <span class="data-grid-cell-content">Categories</span>
      </th>
      <th class="data-grid-th">
          <span class="data-grid-cell-content">Actions</span>
      </th>
    </tr>
    <?php foreach ($list as $product): ?> 
    <tr class="data-row">
      <td class="data-grid-td">
         <span class="data-grid-cell-content"><?php echo $product->name; ?></span>
      </td>
      <td class="data-grid-td">
         <span class="data-grid-cell-content"><?php echo $product->sku; ?></span>
      </td>
      <td class="data-grid-td">
         <span class="data-grid-cell-content"><?php echo $product->price; ?></span>
      </td>
      <td class="data-grid-td">
         <span class="data-grid-cell-content"><?php echo $product->quantity; ?></span>
      </td>
      <td class="data-grid-td">
         <span class="data-grid-cell-content"><?php echo $product->category_id; ?></span>
      </td>
      <td class="data-grid-td">
        <div class="actions">
          <div class="action edit">
            <span>
              <a href="<?php echo url("editar-produto/$product->id"); ?>">Edit</a>
            </span>
          </div>
          <div class="action delete">
            <span>
              <a href="<?php echo url("produto/$product->id"); ?>">Delete</a>
            </span>
          </div>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</main>
<!-- Main Content -->
