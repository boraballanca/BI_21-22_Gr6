<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["name"])) {
?>
    Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
        <script>
            window.alert("You're already logged in. Redirecting to home page.");
            window.location.replace("index.html");
        </script>
    <?php
};
    ?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="myStyle.css">
        <title>Login - Astounding</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
        <style>
            main {
                margin: 0;
                padding: 0;
                background-color: #585858;
                font-family: 'Times New Roman', Times, serif;
                background-image: url("images/bg2.png"), url("images/bg1.jpg");
                background-repeat: no-repeat, repeat;
                background-position: right bottom, left top;
                background-origin: content-box, padding-box;
                background-size: 8%, auto;
                height: 87vh;
            }

            .login {
                width: 382px;
                overflow: hidden;
                margin: auto;
                margin: 20 0 0 450px;
                padding: 80px;
                background: #303030;
                border-radius: 15px;
            }

            h2 {
                text-align: center;
                color: azure;
                padding: 20px;
            }

            label {
                color: #949494;
                font-size: 17px;
            }

            #Uname {
                width: 300px;
                height: 30px;
                border: none;
                border-radius: 17px;
                padding-left: 8px;
            }

            #Pass {
                width: 300px;
                height: 30px;
                border: none;
                border-radius: 17px;
                padding-left: 8px;
            }

            #log {
                width: 100px;
                height: 30px;
                border: none;
                border-radius: 17px;
                padding-left: 7px;
                color: #303030;
                font-weight: bold;
                background-color: #949494;
            }

            #div1,
            #div2 {
                float: left;
                width: 100px;
                height: 35px;
                margin: 10px;
                padding: 10px;
                border: 1px solid black;
            }

            span {
                color: white;
                font-size: 17px;
            }

            main a {
                float: right;
                color: azure;
                font-size: 0.8em;
            }

            footer {
                margin: 0;
            }
        </style>
        <script>
            function allowDrop(ev) {
                ev.preventDefault();
            }

            function drag(ev) {
                ev.dataTransfer.setData("text", ev.target.id);
            }

            function drop(ev) {
                ev.preventDefault();
                var data = ev.dataTransfer.getData("text");
                ev.target.appendChild(document.getElementById(data));
            }
        </script>
    </head>

    <body>
        <header>
            <nav>
                <a href="index.html">
                    <div id="logoimg">
                        <!-- <h1>Astounding</h1>
                  <p>Free PSD Website Template</p> -->
                    </div>
                </a>
                <div class="navBar">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="blog.html">BLOG</a></li>
                        <li><a href="calendar.html">CALENDAR</a></li>
                        <li><a href="calculator.html">BMI CALCULATOR</a></li>
                        <li><a href="login.html">LOGIN</a></li>
                    </ul>
                </div>
            </nav>
        </header>


        <main>
            <div class="login">
                <form id="login" action="authentication.php" onsubmit="return validation()" method="POST">
                    <label><b>User Name
                        </b>
                        <br>
                    </label>
                    <input type="text" name="Uname" id="Uname" placeholder="Username">
                    <br><br>
                    <label><b>Password
                        </b>
                        <br>
                    </label>

                    <input type="Password" name="Pass" id="Pass" placeholder="Password" required>
                    <br><br>

                    <br>
                    <input list="answers" name="answer" id="answer" placeholder="Select a prime number" style="border-radius:25px;" required>
                    <datalist id="answers">
                    <?php 

                    $nrArr = array();
                    define("defaultIn", 7);
                    echo '<option value='.defaultIn.'>';


                    for ($i = 0; $i < 5; $i++) {
                        $randNr = rand(1, 10);
                        $nrArr[$i] = $randNr; 
                        echo '<option value='.$randNr.'>';
                    }

                    sort($nrArr);

                    ?>
                    <br>
                    <br>
                    </datalist>

                    <input type="submit" id="log" value="Log in" />
                    <br><br>
                    <input type="checkbox" id="check">
                    <span>Remember me</span>
                    <br><br>
                    <a href="#" style="margin-left: 10px;">Forgot Password</a>
                    <a href="account.html" >Create an account</a>
        </main>


        <footer>
            <table>
                <form action="post" action="http://www.randyconnolly.com/tests/process.php">
                    <tr>
                        <th>From The Blog</th>
                        <th>Quick Links</th>
                        <th>Latest Tweets</th>
                        <th>Contact Us</th>
                    </tr>
                    <tr rowspan="7">
                        <td>
                            <p class="postTitle">How to have a better workout routine?</p>
                            <p class="postUser"><a href="#">Jason</a>, jason@trainer.com</p>
                            <p class="postUser">Thursday, 12th November 2021</p>
                            <p>Lately, for me, it???s all been about self care. I???m really leaning in and realizing that I can apply self-care not just when I???m in the bath or snuggled on the couch, but literally whenever and wherever!<br><br> And that means taking
                                care of myself </p>
                            <p><a href="post.html">Read More ??</a></p>
                        </td>
                        <td>
                            <a href="podcasts.html">?? Podcasts</a>
                            <hr class="footer">
                            <a href="blog.html">?? Blogs</a>
                            <hr>
                            <a href="calculator.html">?? BMI Calculator</a>
                            <hr>
                            <a href="calendar.html">?? Calendar</a>
                            <hr>
                            <a href="login.html">?? Login</a>
                            <hr>
                            <a href="gameController.html">?? Feeling Bored?</a>
                            <hr>
                            <a href="about.html">?? About us</a>
                            <hr>
                        </td>
                        <td>
                            <p><a href="#">@hannahmorgan</a> I really love this gym. The trainers are the best, they are always there to help you and guide you to be your best self. 18 hours ago</p>
                            <p><a href="#">@tedmosby</a> This gym transformedme. Not ony physically, but in every aspect of my life. Forever thankful to all of the staff members that work there. 2 days ago</p>
                        </td>
                        <td>
                            <input type="text" name="Emri" placeholder="Full Name" size="30">
                            <input type="email" name="Email" placeholder="Email Address" size="30">
                            <input type="text" name="Subject" placeholder="Subject" size="30">
                            <textarea name="Message" rows="4" cols="29" placeholder="Message"></textarea><br>
                            <button type="submit" class="rounded" value="Submit">SUBMIT</button>
                        </td>
                    </tr>

            </table>
            </form>
            <div class="copyright">
                <address>
                    <p>Copyright &copy; 2013 Domain Name - All Rights Reserved</small></p>
                </address>
            </div>
        </footer>



        <script>
            function validation() {
                var id = document.f1.Uname.value;
                var ps = document.f1.Pass.value;
                if (id.length == "" && ps.length == "") {
                    alert("User Name and Password fields are empty");
                    return false;
                } else {
                    if (id.length == "") {
                        alert("User Name is empty");
                        return false;
                    }
                    if (ps.length == "") {
                        alert("Password field is empty");
                        return false;
                    }
                }
            }
        </script>

    </body>

    </html>