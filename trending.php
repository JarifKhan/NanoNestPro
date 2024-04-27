<?php

include("header.php");

?>


<?php
$trenSql = "SELECT p.id FROM ( SELECT p_id, MAX(date) AS latest_date FROM wishlist GROUP BY p_id UNION ALL SELECT p_id, MAX(date) AS latest_date FROM cart GROUP BY p_id ) AS latest_dates JOIN product p ON latest_dates.p_id = p.id GROUP BY p.id, p.title ORDER BY latest_date DESC LIMIT 15;";
$trenResult = mysqli_query($db, $trenSql);
?>





<section class=" xl:w-full xl:max-w-[1188px] mx-2 md:mx-10 lg:mx-20 xl:mx-auto " style="margin-bottom: 50px;">
    <div class="bg-[#F3F3F3] rounded-md mt-24 xl: p-4 md:p-6" style="margin-top: 3rem;">
        <div>
            <h1 class="text-dark font-bold text-lg md:text-xl xl:text-2xl">Trending Products</h1>
            <hr class=" border-[#565656] border-opacity-20 mt-1">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-1 md:gap-3 mt-4 md:mt-6">
                <?php
                // Iterate over the fetched brand data
                while ($row = mysqli_fetch_assoc($trenResult)) {
                ?>


                    <?php

                    include("Template/_trending.php");

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