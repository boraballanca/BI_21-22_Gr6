<?php
include('config.php');
session_start();


if (isset($_REQUEST['Emri']) && isset($_SESSION["name"])) {
    $name = $_POST['Emri'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    

    $sql = "INSERT INTO contacts
        (name, email, subject, message)
        VALUES ('$name','$email','$subject', '$message')";

    $retval = mysqli_query($conn, $sql);

    if (!$retval) {
        die('Could not enter data: '.mysqli_connect_error());
    }
    echo "<script>alert('Thank you for contacting us. We will get back to you soon!');
                window.location.replace('index.php');
          </script>";
    mysqli_close($conn);
}
else {
    echo "<script>alert('Something went wrong! Make sure you are logged in.')
          window.location.replace('index.php');;
          </script>";
}
?>