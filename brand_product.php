<?php

    include ("header.php");

?>


<?php
// Assuming you have already connected to your database

// Step 1: Retrieve Brand Information
$brand_name = $_GET['name'];
// Assuming you pass brand name through URL
$sql_brand = "SELECT * FROM brand WHERE name = '$brand_name'";
$result_brand = mysqli_query($db, $sql_brand);
$brand = mysqli_fetch_assoc($result_brand);




// Step 2: Retrieve Products
$sql_products = "SELECT product.*, picture.picture AS product_picture 
                 FROM product 
                 LEFT JOIN picture ON product.id = picture.p_id AND picture.type = 'main'
                 WHERE product.brand_id = '{$brand['id']}'";
$result_products = mysqli_query($db, $sql_products);

?>


        <div class="products">
        
        
            <section class=" xl:w-full xl:max-w-[1188px] mx-2 md:mx-10 lg:mx-20 xl:mx-auto " style="margin-bottom: 50px;">
                <div class="bg-[#F3F3F3] rounded-md mt-24 xl: p-4 md:p-6" style="margin-top: 3rem;">
                    <div>
                        <h1 class="text-dark font-bold text-lg md:text-xl xl:text-2xl"><?php echo $brand['name']; ?></h1>
                        <hr class=" border-[#565656] border-opacity-20 mt-1">
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-1 md:gap-3 mt-4 md:mt-6">

                            <?php while ($product = mysqli_fetch_assoc($result_products)) { ?>
                            <div class="trend-item">
                                <div class="bg-white rounded-md w-full h-full max-h-[24rem] relative">
                                    <div class="flex flex-col justify-between">
                                        <div class="flex justify-center hover:cursor-pointer z-0">
                                            <img src="<?php echo $product['product_picture']; ?>"<?php echo $product['new_price']; ?>" alt="" class="w-44 h-44">
                                        </div>
                                        <div class="flex flex-col mt-3 md:mt-1 p-2">
                                            <a href="">
                                                <div class="h-6 text-sm hover:text-orange">
                                                    <p class="font-bold line-clamp-2"><?php echo $product['title']; ?></p>
                                                </div>

                                            </a>
                                            <div class="mt-9 lg:mt-6">
                                                <div class="flex justify-start space-x-1 md:space-x-2">
                                                    <span class=" font-bold text-sm">
                                                        $<?php echo $product['new_price']; ?>
                                                    </span>
                                                </div>
                                                <div class="flex flex-row justify-between items-center mt-1 mx-0">
                                                    <div class="hidden md:flex flex-row">
                                                        <span><i class="fas fa-star text-yellow-400"></i></span>
                                                        <span><i class="fas fa-star text-yellow-400"></i></span>
                                                        <span><i class="fas fa-star text-yellow-400"></i></span>
                                                        <span><i class="fas fa-star text-yellow-400"></i></span>
                                                        <span><i class="far fa-star text-yellow-400"></i></span>
                                                    </div>
                                                    <div class="flex items-center space-x-2">
                                                        <span><i class="fa-regular fa-heart fa-fw text-[#603913]"></i></span>
                                                        <span><i class="fa-solid fa-cart-shopping text-[#603913]"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php } ?>

                        </div>

                        

                    </div>
                </div>
            </section>

        </div>

       




<?php

    include ("footer.php");

?>



