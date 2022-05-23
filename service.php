<!DOCTYPE html>
<html lang="en" manifest="astounding.appcache">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css">
    <title>Astounding</title>
    <script src="jQuery/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function() {
            $(".tweets").click(function() {
                $(".user").animate({
                    height: 'toggle'
                });
            });
        });
    </script>
</head>

<style>
    main h3,
    p {
        text-align: center;
        position: relative;
    }
    
    #listOfAwards {
        float: left;
        margin: 2%;
        margin-left: 25.375em;
        padding: 2%;
        text-align: justify;
        column-count: 2;
    }
    
    #listOfAwards h4 {
        text-decoration: underline;
        font-weight: bold;
    }
    
    .awards img {
        width: 250px;
        height: 350px;
        display: inline;
        text-align: justify;
        margin: 1%;
        margin-left: 9.375em;
        padding: 1%;
        position: relative;
        float: left;
        border-radius: 5px;
        box-shadow: 1px 1px 20px #408199;
    }
    
    .partTeam {
        border-collapse: collapse;
        margin: 2%;
        /* position: absolute; */
        font-size: 0.9em;
        min-width: 400px;
        top: 80%;
        left: 8%;
        border-radius: 5px 5px 0 0;
        outline-offset: 5px;
        overflow: hidden;
        box-shadow: 1px 1px 20px #408199;
        text-align: center;
    }
    
    .partTeam thead tr {
        background-image: url(images/stripe.PNG);
        background-position: center;
        background-repeat: repeat;
        background-size: cover;
        font-weight: bold;
    }
    
    .partTeam th,
    .partTeam td {
        padding: 12px 2px;
    }
    
    .partTeam tbody tr {
        border-bottom: 1px solid #dddddd;
    }
    
    .partTeam tbody tr:nth-of-type(even) {
        background-color: #b8b8b8;
    }
    
    .partTeam tbody tr:last-of-type {
        border-bottom: 2px ridge #a0a0a0;
    }
</style>

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
    <main>

        <h3>Certified Personal Trainers,<br>Youtube Content Creators</h3>

        <p>Our team is has a very successfull Youtube Channel with over 22M subscribers. Our goal is to make health and fitness accessable to all by providing free workout programs
            </br>
        </p>

        <div class="awards">

            <img src="images/award1.PNG" alt="award1">
            <img src="images/award2.PNG" alt="award2">
            <img src="images/award3.PNG" alt="award3">

            <img src="images/award4.PNG" alt="award4">
            <img src="images/award5.PNG" alt="award5">
            <img src="images/award6.PNG" alt="award6">

        </div>
        <div id="listOfAwards">
            <h4>We have won many awards, some of them being:
            </h4>
            <ol>
                <li>Winner:Female Fitness Influencer of the Year 2021</li>
                <li>Streamy:Youtube Streamy Award for Health & Wellness 2020</li>
                <li>US Top 10: Creator 2020</li>
                <li>US Top 10: Breakout Creator 2020</li>
            </ol>
            <h4>What we can offer</h4>
            <ul>
                <li>Meal Plan</li>
                <li>Workouts of different kinds</li>
                <li>Kick Box</li>
                <li>Hicking trips every month</li>
                <li>24h GYM</li>
            </ul>
        </div>
        <form  method="post" enctype="multipart/form-data" id="resume">




            <table class="partTeam">
                <th>
                    <h4>Do you wish to become a part of our team?</h4>
                </th>
                <tbody>
                    <tr>
                        <td> Name </td>
                        <td><input type="text" placeholder="Name and Surname" id="identification"></td>

                    </tr>
                    <tr>
                        <td>Date of birth</td>
                        <td>
                            <input type="date" placeholder="Date of Birth" id="dob">
                        </td>
                    </tr>
                    <tr>
                        <td>Please insert your CV file</td>
                        <td><input type="file" name="cv" id="cv"></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td>
                            
                        <input type="hidden" name="MAX_FILE_SIZE"  id="maxVal"value="102400">
                        <input type="submit"> </td>

                    </tr>

                </tfoot>
            </table>
        </form>
        <script>
            document.getElementById("resume").onsubmit = function() {
                var file = document.getElementById("cv");
                var max = document.getElementById("maxVal").value;

                if (file.files && file.files.length == 1) {
                    if (file.files[0].size > max) {
                        // window.alert(file.files[0].size>max_size)
                        window.alert("The file must be less than " + (max / 1024) + "KB");
                        e.preventDefault();
                    }
                }
            }
        </script>
        
        <?php
        foreach($_FILES as $fileKey => $fileArray)
        {
            if($fileArray["error"]!=UPLOAD_ERR_OK)
            {echo "<p id='CV'>Error: The file must be less than 100KB </p><br>";}
            else{
                echo $fileKey . " Uploaded Successfully";
            }
        }
        ?>
    </main>
</body>
<footer>
    <table>
        <form method="post" action="http://www.randyconnolly.com/tests/process.php">
            <tr>
                <th>From The Blog</th>
                <th>Quick Links</th>
                <th class="tweets">Latest Tweets</th>
                <th>Contact Us</th>
            </tr>
            <tr rowspan="7">
                <td>
                    <p class="postTitle">How to have a better workout routine?</p>
                    <p class="postUser"><a href="#">Jason</a>, jason@trainer.com</p>
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
                    <p class="user"><a href="#">@hannahmorgan</a> I really love this gym. The trainers are the best, they are always there to help you and guide you to be your best self. 18 hours ago</p>
                    <p class="user"><a href="#">@tedmosby</a> This gym transformedme. Not ony physically, but in every aspect of my life. Forever thankful to all of the staff members that work there. 2 days ago</p>
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
    <p>Copyright &copy; 2013 Domain Name - All Rights Reserved</small></p>
</address>
    </div>
</footer>


</html>