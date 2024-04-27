<?php

include("header.php");

?>


<?php
$trenSql = "SELECT id FROM product ORDER BY added_date DESC;";
$trenResult = mysqli_query($db, $trenSql);
?>





<section class=" xl:w-full xl:max-w-[1188px] mx-2 md:mx-10 lg:mx-20 xl:mx-auto " style="margin-bottom: 50px;">
    <div class="bg-[#F3F3F3] rounded-md mt-24 xl: p-4 md:p-6" style="margin-top: 3rem;">
        <div>
            <h1 class="text-dark font-bold text-lg md:text-xl xl:text-2xl">What's New</h1>
            <hr class=" border-[#565656] border-opacity-20 mt-1">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-1 md:gap-3 mt-4 md:mt-6">
                <?php
                // Iterate over the fetched brand data
                while ($row = mysqli_fetch_assoc($trenResult)) {
                ?>


                    <?php

                    include("Template/_whatsnew.php");

                    ?>


                <?php
                }
                ?>




            </div>
        </div>
    </div>
</section>






<?php

include("footer.php");

?>