<?php
    include('config.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['Uname'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['Uname']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['Pass']);
        $password = mysqli_real_escape_string($conn, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo '<script>alert("Account created succesfully. Redirecting to main page.");
                          window.location.replace("index.php");</script>';
        } else {
            echo '<script>alert("Account creation failed. Please re-check your input.");
                          window.location.replace("account.html");</script>';
        }
    }
?>
 

