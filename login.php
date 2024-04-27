<?php
    require('function.php');
    ?>
<?php

   
if (isset($_POST['login'])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve user data from the database
    $result = $db->query("SELECT * FROM user WHERE email='$email' ");

  
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            session_start(); 
            $_SESSION["id"] = $row["id"];
            header("Location: profile.php");
            exit();
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }

}
?>

<?php
//    header link
    include("header.php");
//    header link
?>


<div class="login-container">
    <h2>Login</h2>
    <form class="login-form" method="post" action="login.php">
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login" name="login">
    </form>
    <p>Don't have any account? <a style="color: #603913;"href="register.php"><strong>Sign up</strong></a></p>
</div>


<?php

    include("footer.php");

?>