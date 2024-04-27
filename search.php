<?php
include('function.php');


// Get the search query from the AJAX request
$searchQuery = $_GET['q'];

$sql = "SELECT * FROM product join picture on product.id=picture.p_id WHERE title LIKE '%$searchQuery%'";
$result = $db->query($sql);

// Display the posts as card views with images
if ($result && $result->num_rows > 0) :
    while ($row = $result->fetch_assoc()) :
?>


        <div class="card-body-wrapper">
            <div class="card mb-3 m-2">

                <div class="card-body">
                    <img src="<?= $row['picture'] ?>" alt="Post Image">
                    <a href="product.php?id=<?= $row['id'] ?>" class="card-title"><?= $row['title'] ?></a>
                </div>
            </div>
        </div>


    <?php
    endwhile;
else :
    ?>



<?php endif; ?>