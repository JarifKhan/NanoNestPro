<?php

include("header.php");

?>

<?php
// Assuming you have already connected to your database

// Fetch brand data from the database
$sql = "SELECT name , picture FROM brand";
$result = mysqli_query($db, $sql);

?>

<div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-6 gap-1 md:gap-3 mt-4 md:mt-6 brand-grid">
    <?php
    // Iterate over the fetched brand data
    while ($row = mysqli_fetch_assoc($result)) {
    ?>

        <?php

        include("Template/_brands.php");

        ?>


    <?php
    }
    ?>
</div>





<?php

include("footer.php");

?>