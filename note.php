<?php
$newProdSql = "SELECT id FROM product ORDER BY added_date ASC";
$newProdResult = mysqli_query($db, $newProdSql);
?>

<!-- New Phones -->
<section id="new-phones">
    <div class="container mx-auto">
        <h4 class="font-body text-xl">New Products</h4>
        <hr>

        <!-- owl carousel -->
        <div class="owl-carousel owl-theme ">
            <?php
            // Iterate over the fetched product data
            while ($row = mysqli_fetch_assoc($newProdResult)) {
                // Fetch detailed product information including the main picture
                $newProdInnerSql = "SELECT product.*, picture.picture 
                                    FROM product 
                                    LEFT JOIN picture ON product.id = picture.p_id AND picture.type = 'main' 
                                    WHERE product.id = '{$row['id']}'";
                $newProdInnerResult = mysqli_query($db, $newProdInnerSql);
                $newProddetails = mysqli_fetch_assoc($newProdInnerResult);
            ?>
                <div class="item py-2 bg-gray-200">
                    <div class="product font-body">
                        <a href="product.php?id=<?= $newProddetails['id'] ?>">
                            <img src="<?= $newProddetails['picture'] ?>" alt="<?= htmlspecialchars($newProddetails['title']) ?>">
                        </a>
                        <div class="text-center">
                            <a href="product.php?id=<?= $newProddetails['id'] ?>">
                                <h6 class="productHlink"><?= htmlspecialchars($newProddetails['title']) ?></h6>
                            </a>
                            <div class="rating font-size-12">
                                <span><i class="fas fa-star text-yellow-400"></i></span>
                                <span><i class="fas fa-star text-yellow-400"></i></span>
                                <span><i class="fas fa-star text-yellow-400"></i></span>
                                <span><i class="fas fa-star text-yellow-400"></i></span>
                                <span><i class="far fa-star text-yellow-400"></i></span>
                            </div>
                            
                            <div class="price py-2">
                                <span>$<?= htmlspecialchars($newProddetails['new_price']) ?></span>
                            </div>
                            <button type="submit" class="btn bg-btnc text-xs py-1.5 px-3 rounded hover:bg-btnchov transition">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- !owl carousel -->

    </div>
</section>
<!-- !New Phones -->
