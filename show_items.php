<main>
  <div class="container d-flex">
    <div class="row">
      <?php foreach($products as $key => $categories): ?>
        <div class="col-12 py-4">
          <h2 class="fw-bold text-primary"><?php echo $key; ?></h2>
        </div>
        <?php foreach($categories as $product): ?>
          <?php if(empty($_GET) || isset($filtered[$product->category->name])): ?>
            <div class="col-3">
              <div class="card mb-4" id="<?php echo $product->id ?>">
                <img src="<?php echo $product->image; ?>" class="card-img-top" alt="<?php echo $product->name; ?>">
                <div class="card-body">
                  <h3 class="card-title text-primary"><?php echo $product->name; ?></h3>
                  <p class="card-text">By <span class="text-muted"><?php echo $product->brand; ?></span></p>
                  <p class="card-text d-flex justify-content-between align-items-center">
                    <?php echo $product->get_price(); ?>
                    <img style="width: 30px;" src="<?php echo $product->category->icon; ?>" alt="<?php echo $product->category->name; ?>">
                  </p>
                </div>
                <ul class="list-group list-group-flush">
                  <?php if(isset($product->weight)){ echo "<li class='list-group-item'> $product->weight </li>"; } ?>
                  <?php if(isset($product->flavor)){ echo "<li class='list-group-item'> $product->flavor </li>"; } ?>
                  <?php if(isset($product->feature)){ echo "<li class='list-group-item'> $product->feature </li>"; } ?>
                  <?php if(isset($product->size)){ echo "<li class='list-group-item'> $product->size </li>"; } ?>
                  <?php if(isset($product->color)){ echo "<li class='list-group-item'> $product->color </li>"; } ?>
                </ul>
                <div class="card-body">
                  <button type="button" class="btn btn-primary" <?php if(!($product->get_availabilty())) echo "disabled"; ?>>Buy</button>
                  <button type="button" class="btn btn-outline-primary">Add Favourite</button>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endforeach; ?>
    </div>
  </div>
</main>