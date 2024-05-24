<?php
//    header link
    include("header.php");
//    header link
?>

<?php
// Check if the registration form is submitted
if (isset($_POST['register'])) {


    // Get form data
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate form data (you can add more validation as needed)
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute SQL query to insert user data into the database
    $stmt = $db->prepare("INSERT INTO user (full_name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $full_name, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $db->error;
    }

}
?>


<div class="register-container">
    <h2>Sign up</h2>
    <form class="register-form" method="post" action="register.php">
        <input type="text" name="full_name" placeholder="full_name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="submit" value="Sign up" name="register">
    </form>
    <p>Already have account? <a style="color: #603913;" href="login.php"><strong>Log in</strong></a></p>
</div>


<?php

    include("footer.php");

?>