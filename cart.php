<?php

    include("header.php");

?>


<?php

$sql ="INSERT INTO cart (id, u_id, date,p_id) VALUES (null, 1, 2024-04-22, 12)";
$result = mysqli_query($db, $sql);


$name = "Product Name";
$price = 10.00;
$description = "Product Description";

?>

<?php

    include("Template/_cart-temp.php");


    include("Template/_newphone.php");

?>


<?php

    include("footer.php");

?>



<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST["product_id"];
    $quantity = $_POST["quantity"];

    $sql = "INSERT INTO cart (product_id, quantity) VALUES ('$product_id', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo "Product added to cart successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
