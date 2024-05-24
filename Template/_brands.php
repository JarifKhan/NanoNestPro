<?php

$name = $row['name'];
$concatenated_string = "brand_product.php?name=" . $name;
?>



<div class="trend-item trend-item-ex1">
    <div class="bg-white rounded-md w-full h-full max-h-[24rem] relative brand-wrapper">
        <div class="flex flex-col justify-between items-center">
            <div class="flex justify-center hover:cursor-pointer z-0 brandImg-Wrapper">
                <a href="<?php echo $concatenated_string ?>"><img src="<?php echo $row['picture']; ?>" alt="<?php echo $row['name']; ?>" class="w-44 h-44"></a>
            </div>
        </div>
    </div>
</div>

<?php
