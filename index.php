<!DOCTYPE html>
<html lang="en" manifest="astounding.appcache">

<?php
session_start();
?>

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
                    <?php 
                    
                    if (!isset($_SESSION["name"])) {
                        echo '<li><a href="login.php">LOGIN</a></li>';
                    } else {
                        echo '<li><a href="logout.php">LOGOUT</a></li>';
                    };
                        ?>
                    
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <h1 id="massive">A Healthy <br>Mind In A<br> Healthy Body.</h1>
        <div class="services">
            <a href="service.html">
                <div class="service" id="serviceImg1">
                    <!-- <div class="serviceImage" id="serviceImg2"></div> -->
                    <h2>Body<br>Slim</h2>
                    <p>Together we can achieve your dream body</p>
                </div>
            </a>
            <a href="service.html">
                <div class="service" id="serviceImg2">
                    <!-- <div class="serviceImage" id="serviceImg2"></div> -->
                    <h2>Body<br>Building</h2>
                    <p>We offer body building classes, from beginner to pro</p>

                </div>
            </a>
            <a href="service.html">
                <div class="service" id="serviceImg3">
                    <!-- <div class="serviceImage" id="serviceImg3"></div> -->
                    <h2>Diet<br>Plans</h2>
                    <p>Personalised diet plans for your body type</p>
                </div>
            </a>
            <a href="service.html">
                <div class="service" id="serviceImg4">
                    <!-- <div class="serviceImage" id="serviceImg4"></div> -->
                    <h2>Personal<br>Trainer</h2>
                    <p>A personal trainer to push you through the hard workout </p>
                </div>
            </a>
        </div>

        <div class="team">
            <h1 id="massive" style="color: #d3d3d3; text-align: center;">Meet Our Team</h1>
            <div class="teamMember">
                <img src="images/team1.jpg" alt="Person 1" width="300">
                <figcaption>Jason Regalado</figcaption>
                <hr>
                <p>Jason is the Co-Founder and <abbr title="Chief Excecutive Officer">CEO</abbr> of our company. He will do anything to make your dream body come true<br><a href="staff1.html">View Profile »</a>
                </p>
            </div>
            <div class="teamMember">
                <img src="images/team5.jpg" alt="Person 2" width="300">
                <figcaption>Janice Bing</figcaption>
                <hr>
                <p>Janice is the Co-Founder of our company. At a very young age she discovered her love for fitness.<br><a href="staff2.html">View Profile »</a>
                </p>
            </div>
            <div class="teamMember">
                <img src="images/team3.jpg" alt="Person 3" width="300">
                <figcaption>Jessica Johnson</figcaption>
                <hr>
                <p>Jessica is one of the best trainers you can find. Her motivation words will get you through your hard workout.<br><a href="staff3.html">View Profile »</a>
                </p>
            </div>
            <div class="teamMember">
                <img src="images/team4_flipped.jpg" alt="Person 4" width="300">
                <figcaption>Juan Lopez</figcaption>
                <hr>
                <p>Juan is the funniest out of everyone. His jokes light up the room but when you need to get the work done, you do not recognise him.<br><a href="staff4.html">View Profile »</a>
                </p>
            </div>
        </div>
    </main>
</body>

<footer>
    <table>
        <form method="post" action="contact.php">
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
                    <a href="questions.php">» Questions</a>
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
                    <textarea name="Message" rows="4" cols="29" placeholder="Message" required></textarea><br>
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