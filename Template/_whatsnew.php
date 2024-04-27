<?php

$whatsnewInnerSql = "SELECT product.*, picture.picture
FROM product 
LEFT JOIN picture ON product.id = picture.p_id AND picture.type = 'main'
WHERE product.id = '$row[id]'";
$whatsnewInnerResult = mysqli_query($db, $whatsnewInnerSql);

$prodetails = mysqli_fetch_assoc($whatsnewInnerResult);
?>


<div class="whatsnewd-item">
    <div class="bg-white rounded-md w-full h-full max-h-[24rem] relative">
        <div class="flex flex-col justify-between">
            <div class="flex justify-center hover:cursor-pointer z-0">
                <a href="product.php?id=<?= $row['id'] ?>"><img src="<?php echo $prodetails['picture']; ?>" alt="" class="w-44 h-44"></a>
            </div>
            <div class="flex flex-col mt-3 md:mt-1 p-2">
                <a href="product.php?id=<?= $row['id'] ?>" class="productHlink">
                    <div class="h-6 text-sm hover:text-orange">
                        <p class="font-bold line-clamp-2"><?php echo $prodetails['title']; ?></p>
                    </div>

                </a>
                <div class="mt-9 lg:mt-6">
                    <div class="flex justify-start space-x-1 md:space-x-2">
                        <span class=" font-bold text-sm">
                            $<?php echo $prodetails['new_price']; ?>
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