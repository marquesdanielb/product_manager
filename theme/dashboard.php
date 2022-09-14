<?php $v->layout("_theme"); ?>

<!-- Main Content -->
<main class="content">
  <div class="header-list-page">
    <h1 class="title">Dashboard</h1>
  </div>
  <div class="infor">
    You have 4 products added on this store: <a href="<?php echo url("adicionar-produto"); ?>" class="btn-action">Add new Product</a>
  </div>
  <ul class="product-list">
    <?php foreach ($list as $product): ?>
    <li>
      <div class="product-image">
        <img src="theme/images/product/tenis-runner-bolt.png" layout="responsive" width="164" height="145" alt="Tênis Runner Bolt" />
      </div>
      <div class="product-info">
        <div class="product-name"><span><?php echo $product->name; ?></span></div>
        <div class="product-price"><span class="special-price"><?php echo $product->quantity; ?> available</span> <span>R$<?php echo $product->price; ?></span></div>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
</main>
<!-- Main Content -->
