<?php      
    include('config.php');  
    session_start();
    $username = $_POST['Uname'];  
    $password = $_POST['Pass'];  
     
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
     
        $sql = "SELECT * FROM `users` WHERE username='$username'
        AND password='" . md5($password) . "'";  
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

        if(is_array($row)) {
            $_SESSION["name"] = $row['username'];
        }        

        if(isset($_SESSION["name"])) {
            header("Location:index.html");
        }        

        $count = mysqli_num_rows($result);  
         
        if($count == 1){  
            echo '<h1>Welcome back strtoupper($username)</h1>
            <a href="./index.html">Welcome back'.$username.' Click here to go the Home Page</a>';  
        }  
        else{  
            //echo "<h1> Login failed. Invalid username or password.</h1>
            //<a href='./login.html'> The username and password don't match. Click here to try again</a>"; 
            echo '<script>alert("Login failed. Please try again.");
                  window.location.replace("login.php");</script>'; 
        }    
?>  

