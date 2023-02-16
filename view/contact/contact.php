<?php
include_once "../../controller/db.php";
if(isset($_POST['submit'])) {
    // Get form data and sanitize inputs
    $name = mysqli_real_escape_string($conn, $_POST["con_name"]);
    $phone = mysqli_real_escape_string($conn, $_POST["con_phone"]);
    $email = mysqli_real_escape_string($conn, $_POST["con_email"]);
    $message = mysqli_real_escape_string($conn, $_POST["con_message"]);

    // Insert data into database
    $sql = "INSERT INTO contacts (`id`,`name`, `phone`, `email`, `message`) VALUES ('','$name', '$phone', '$email', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>