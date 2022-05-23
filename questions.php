<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" manifest="astounding.appcache">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css">
    <title>Astounding</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <script src="jQuery/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function() {
            //Animation when you click on Latest Tweets
            $(".tweets").click(function() {
                $(".user").animate({
                    height: 'toggle'
                });

            });
            //When you click the user you get the text and set the text to "No more tweets."        
            $(".user").click(() => {
                alert("Text: " + $(".user").text());
                $(".user").text("No more tweets.");
            });

            //When you click on "From the Blog" you remove the title
            $(".blog").click(() => {
                alert("You removed the title of the blog");
                $("#blog").remove("#blog");
            });

            //Adding a text when you click on Copyrighs
            $(".copyright").click(function() {
                $("#copyright").append(" <b>Edited in 2022 by: Bora Ballanca, Jehone Kalaveshi and Urim Berisha</b>.");
            });
        });
    </script>

    <style>
    #questionsPage {
        text-align: center;
        padding-top: 1%;
    }

    #questionsTable {
        margin: auto;
        padding: 2% 0;
    }

    #readText {
        font-size: 15px;
        color: #343434;
    }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="index.html">
                <div id="logoimg">
                    <!-- <h1>Astounding</h1>
                <p>Free PSD Website Template</p> -->
                    <!-- <img src="images/logo_white2.png" width="200px" style="margin-top: -15px; margin-left: 50px;"> -->
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

    <main id = "questionsPage">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<table id="questionsTable">
    <th>What are your goals?</th>

    <tr>
        <td>What is your current goal?</td>
        <td>
            <select name="goal" id="goal" >
                <option value="lose">Lose weight</option>
                <option value="maintain">Maintain weight</option>
                <option value="gain">Gain Weight</option>
            </select>
            
        </td>
    </tr>
    <tr>
        <td>How active are you?</td>
        <td><select name="fitnes" id="fitnes" >
                <option value="high">Highly active</option>
                <option value="moderate">Moderately active</option>
                <option value="low">Not active</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Do you need an instructor?</td>
        <td><select name="instructor" id="instructor">
                <option value="love">Yes</option>
                <option value="idk">Not sure</option>
                <option value="nope">No</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Submit your answers</td>
        <td>
            <input type="hidden" name="submitted" value="true">
            <input type="submit" value="Submit">
        </td>
    </tr>
</table>

<?php
        if(isset($_POST['submitted']))
        {
            $goalCookie=$_POST['goal'];
            $activeCookie=$_POST['fitnes'];
            $instructCookie=$_POST['instructor'];

            setcookie("goal", $goalCookie, time()+3600, '/');
            setcookie("fitnes", $activeCookie, time()+3600, '/');
            setcookie("instructor", $instructCookie, time()+3600, '/');
        }

        //echo "Your goal is ". $_COOKIE['goal'];


        if((!isset($_COOKIE['goal']))&&(!isset($_COOKIE['fitnes']))&&(!isset($_COOKIE['instructor'])))
        {
            $goal="Gain Weight";
            $fitnes="Highly Active";
            $instructor="No";
           
        }
        else
        {
            $goal=$_COOKIE['goal'];
            $fitnes=$_COOKIE['fitnes'];
            $instructor=$_COOKIE['instructor'];
            echo "Your goal is: "."<strong>". $_COOKIE["goal"] . "</strong>". "<br>";
            echo "Are you active? " ."<strong>". $_COOKIE["fitnes"] . "</strong>" . "<br>";
            echo "Do you need an instructor? " ."<strong>" . $_COOKIE["instructor"] . "</strong>" . "<br>";            
        }
?></form>
<h1 id="readText"><br>
<?php
        $myfile=fopen("ReadWrite.txt","r") or die("Unable to open the file");
        while($line=fgets($myfile))
        {
            echo $line. "<br>";
        }
        fclose($myfile);
        
        ?>
        </h1>

    </main>

    </body>
    <footer>
    <table>
        <form method="post" action="http://www.randyconnolly.com/tests/process.php">
            <tr>
                <th class="blog">From The Blog</th>
                <th>Quick Links</th>
                <th class="tweets">Latest Tweets</th>
                <th>Contact Us</th>
            </tr>
            <tr rowspan="7">
                <td>
                    <p class="postTitle" id="blog">How to have a better workout routine</p>
                    <p class="postUser"><a href="staff1.html">Jason</a>, jason@trainer.com</p>
                    <p class="postUser">Thursday, 12th November 2021</p>
                    <p>Lately, for me, it’s all been about self care. I’m really leaning in and realizing that I can apply self-care not just when I’m in the bath or snuggled on the couch, but literally whenever and wherever!<br><br> And that means taking
                        care of myself </p>
                    <p><a href="post.html">Read More »</a></p>
                </td>
                <td>
                    <a href="podcasts.html">» Podcasts</a>
                    <hr class="footer">
                    <a href="blog.html">» Blogs</a>
                    <hr>
                    <a href="calculator.html">» BMI Calculator</a>
                    <hr>
                    <a href="calendar.html">» Calendar</a>
                    <hr>
                    <a href="login.html">» Login</a>
                    <hr>
                    <a href="gameController.html">» Feeling Bored?</a>
                    <hr>
                    <a href="about.html">» About us</a>
                    <hr>
                </td>
                <td>
                    <p class="user"><a href="https://twitter.com">@hannahmorgan</a> I really love this gym. The trainers are the best, they are always there to help you and guide you to be your best self. 18 hours ago</p>
                    <p class="user"><a href="https://twitter.com">@tedmosby</a> This gym transformedme. Not ony physically, but in every aspect of my life. Forever thankful to all of the staff members that work there. 2 days ago</p>
                </td>
                <td>
                    <input type="text" name="Emri" placeholder="Full Name" size="30" required>
                    <input type="email" name="Email" placeholder="Email Address" size="30" required>
                    <input type="text" name="Subject" placeholder="Subject" size="30" required>
                    <textarea name="Message" rows="4" cols="29" placeholder="Message" required></textarea ><br>
                    <button type="submit" class="rounded" value="Submit">SUBMIT</button>
                </td>
            </tr>

    </table>
    </form>
    <div class="copyright">
        <address>
    <p id="copyright">Copyright &copy; 2013 Domain Name - All Rights Reserved</small></p>
</address>
    </div>
</footer>
</html>