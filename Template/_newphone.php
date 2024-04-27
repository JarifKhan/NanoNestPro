<?php
$newProdSql = "SELECT id
FROM product
ORDER BY added_date DESC;
";
$newProdResult = mysqli_query($db, $newProdSql);
?>


<!-- New Phones -->
<section id="new-phones">
    <div class="container mx-auto">
        <h4 class="font-body text-xl">New Products</h4>
        <hr>

        <!-- owl carousel -->
        <div class="owl-carousel owl-theme ">
        <div class="item py-2 bg-gray-200">
                    <div class="product font-body">
                        <a href="product.php?id=<?= $row['id'] ?>"><img src="<?php echo $newProddetails['picture']; ?>" alt="<?php echo $newProddetails['title']; ?>"></a>
                        <div class="text-center">
                            <a href="product.php?id=<?= $row['id'] ?>"><h6 class="productHlink"><?php echo $newProddetails['title']; ?></h6></a>
                            <div class="rating  font-size-12">
                                <span><i class="fas fa-star text-yellow-400"></i></span>
                                <span><i class="fas fa-star text-yellow-400"></i></span>
                                <span><i class="fas fa-star text-yellow-400"></i></span>
                                <span><i class="fas fa-star text-yellow-400"></i></span>
                                <span><i class="far fa-star text-yellow-400"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$<?php echo $newProddetails['new_price']; ?></span>
                            </div>
                            <button type="submit" class="btn bg-btnc text-xs py-1.5 px-3 rounded hover:bg-btnchov transition">Add to Cart</button>
                        </div>
                    </div>
                </div>
            <?php
            // Iterate over the fetched brand data
            while ($row = mysqli_fetch_assoc($newProdResult)) {
            ?>
                <?php

                $newProdInnerSql = "SELECT product.*, picture.picture FROM product LEFT JOIN picture ON product.id = picture.p_id AND picture.type = 'main' WHERE product.id = '$row[id]'";
                $newProdinnerResult = mysqli_query($db, $newProdInnerSql);
                $newProddetails = mysqli_fetch_assoc($newProdinnerResult);
                ?>

                


            <?php
            }
            ?>




        </div>
        <!-- !owl carousel -->

    </div>
</section>
<!-- !New Phones -->