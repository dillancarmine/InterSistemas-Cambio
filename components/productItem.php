<div class="col-lg-4 col-md-6 col-sm-6 pb-1">
    <div class="product-item bg-light mb-4">
        <div class="product-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="../img/<?php echo $img ?>" alt="">
        </div>
        <div class="text-center py-4">
            <?php
            echo '<a class="h6 text-decoration-none text-truncate" href="/detalle/' . $productId . '">';
            echo $productName;
            echo '</a>'
            ?>
            <div class="d-flex align-items-center justify-content-center mt-2">
                <h5><?php echo $price ?></h5>
                <h6 class="text-muted ml-2"><del><?php echo $price + 100 ?></del></h6>
            </div>
            <div class="d-flex align-items-center justify-content-center mb-1">
                <small>Stock: </small>
                <small><?php echo $stock ?></small>
            </div>
        </div>
    </div>
</div>