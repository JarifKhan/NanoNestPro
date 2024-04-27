<?php

    include ("header.php");

?>
<?php
$searchQuery = $_GET['id'];
$sql = "SELECT * FROM product join picture on product.id=picture.p_id WHERE id LIKE '%$searchQuery%'";
$result = $db->query($sql);



// Display the posts as card views with images
    $row = $result->fetch_assoc();

    include ("Template/_product.php");


    include ("Template/_newphone.php");

?>



<?php

include ("footer.php");

?>
