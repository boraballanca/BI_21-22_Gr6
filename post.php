<?php

include 'config.php';
session_start();
error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = $_POST['email'];
    $comment = trim($_POST['comment']);

    // Validation if the comment starts with a letter and has 4-50 characters.
    if (!preg_match('/^(?=[a-z]{1})(?=.{4,50})/iD',$comment)) {
        echo "<script>alert('Comment could not be added.');</script>";
        goto end;
    }

    $patterns = array();
    $patterns[0] = '/shit/';
    $patterns[1] = '/bastard/';

    $replacements = array();
    $replacements[0] = 'sh*t';
    $replacements[1] = 'bas***d';

    $comment = preg_replace($patterns, $replacements, $comment);

    $sql = "INSERT INTO comments (name, email, comment, date)
			VALUES ('$name', '$email', '$comment', NOW())";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script type="text/javascript">
           window.location = "#postCommentSection"
      </script>';
    } else {
        echo "<script>alert('Comment couldn't be added.')</script>";
    }
    end:
}

?>

<!-- <?php
if(isset($_SESSION["name"])) {
?>
Welcome <?php echo $_SESSION["name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}else echo "<h1>Please login first .</h1>";
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="myStyle.css">
    <script type="text/javascript" src="myScript.js"></script>
    <title>How to Have a Better Workout Routine - Astounding</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
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
    </main>
    <section class="topSection">
        <div id="leftSideSection">

        </div>
        <div id="rightSideSection">
            <p>THURSDAY, NOVEMBER 12, 2021</p>
            <h1 style="font-family: Arial, Helvetica, sans-serif;">HOW TO HAVE A BETTER WORKOUT ROUTINE</h1>
            <p style="color: #7ebfd6">6 MIN READ &emsp; BY JASON</p>
            <a href="https://www.facebook.com"> <img src="images/facebook_blue.png" width=45px alt="Facebook"></a>
            <a href="https://www.instagram.com"><img src="images/instagram_blue.png" width=45px alt="Instagram"></a>
            <a href="https://www.twitter.com"><img src="images/twitter_blue.png" width=45px alt="Twitter"></a>
        </div>
    </section>

    <article class="postContent">
        <p>Lately, for me, it’s all been about self care. I’m really leaning in and realizing that I can apply self-care not just when I’m in the bath or snuggled on the couch, but literally whenever and wherever!<br><br> And that means taking care of myself
            during my workouts. I’ve noticed that making some small changes to my exercise routine — whether it’s adjusting my space or the actual activity — can make a huge difference in the way I feel during and after. With some self-care principals,
            my workouts have been better, I’ve been looking forward to them more, and I’ve been getting great results!<br><br> I’ve actually been pretty surprised how much a few additions have made a big difference. You can use them to take any workout
            routine for beginners at home and make it awesome!<br><br> Ready? Here are a few little shifts you can make to practice self-care when you exercise and have a better workout routine.
        </p>
    </article>

    <article class="postContent">
        <h1>#1: LISTEN TO UPLIFTING MUSIC</h1>
        <p>This seems like such a little thing, but it can make a major difference! I know that sometimes, when I want to get super pumped up, I’ll turn on more aggressive music. But watch those lyrics, girl! Music that makes you feel energized and uplifted
            can make your workout a super positive routine for you!</p>
    </article>

    <article class="postContent">
        <h1>#2: LIFT WEIGHTS…</h1>
        <p>When people look for a workout routine for beginners at home, they’ll usually start with bodyweight exercises. And I’m all about that! It’s such a great place to start.<br><br> But if you want to get more results from your workouts, try adding
            in some weight. Even a little bit of weight can help you sculpt and tone much more quickly.</p>
        <img src="https://images.unsplash.com/photo-1532384661798-58b53a4fbe37?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">

    </article>

    <article class="postContent">
        <h1>#3: … AND MAKE SURE THEY’RE FREE WEIGHTS</h1>
        <p>Adding weight into your workout routine doesn’t mean springing for a Bowflex. In fact, I’d argue that free weights are actually way better for you! When you use these weights, your muscles have to stabilize your movement. That means you get a
            better workout with basically the same amount of effort!</p>
    </article>

    <article class="postContent">
        <h1>#4: SWAP STRETCHING FOR A DYNAMIC WARMUP</h1>
        <p>Getting ready to exercise is super important because it helps you avoid injury. But if stretching bores the heck out of you, you don’t need to force yourself to do it. Remember, we’re looking for ways to practice self-care all the time, and that
            means skipping stuff you think is a drag!<br><br> Instead of stretching, try a dynamic warmup. That could mean a brisk walk around the block or some jumping jacks. Doing something to get your blood pumping can help you head into your workout
            feeling energized! We have a ton of warmup videos and short workouts in the LSF App!
        </p>
        <img src="https://images.unsplash.com/photo-1607914660217-754fdd90041d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">
    </article>

    <article class="postContent">
        <h1>#5: PREFACE YOUR WORKOUT WITH CARBS</h1>
        <p>If you feel tired or sluggish during your workouts, it might be because you’re not giving your body the right fuel. Get some <a href="http://www.eatingwell.com/article/290631/what-is-a-complex-carbohydrate/">complex carbs</a> into your system
            so your body has something to burn as you exercise.<br><br> Eating carbs before you exercise is sort of like fueling up your car’s gas tank. With this fuel, your body can go harder for longer without feeling totally sapped during or after
            your workout. Need a little help in the nutrition department? Check out our LSF meal plans.</p>
    </article>

    <article class="postContent">
        <h1>#6: DO INTERVALS</h1>
        <p>This is one of my biggest tips for any workout routine for beginners at home. Intervals are an awesome way to blend cardio and strength training while keeping your workouts varied enough that you don’t get bored.<br><br> Basically, with intervals,
            you do short bursts of certain exercises with rests in between. That rest could be a lower-intensity exercise or a straight-up breather.<br><br> If you wanna take interval workouts for a spin, I have a great <a href="https://youtu.be/htpvZxlQjRI">high-intensity interval training (HIIT) workout</a> on YouTube for you!<br><br>
        </p>
    </article>

    <article class="postContent">
        <h1>#7: DRINK WATER</h1>
        <p>Remember what we were saying about fuel before? Girl, your body NEEDS water to run. And seriously, sipping on H2O throughout the day is one of the absolute best acts of self-care you can do. <br><br> Make sure you’re well-hydrated heading into
            your workout and you’ll feel more energized during it, I guarantee it!<br><br>
        </p>
        <img src="https://images.unsplash.com/photo-1612113577059-f01dab2ec79d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">
    </article>

    <article class="postContent">
        <h1>#8: GET A BETTER NIGHT’S SLEEP</h1>
        <p>Sleep is KEY. Seriously, if you’re exhausted before you even lace up your sneakers, how are you supposed to crush your workouts?<br><br> Workouts and sleep go hand-in-hand. When you’re exercising regularly, you’ll sleep better. And when you sleep
            better, you’ll feel better and stronger during your workouts. Basically, you’re never going to have your best sweat session if you’re sleep-deprived.<br><br> Want help getting those zzzzs? Girl, I’ve got you. Check out my <a href="blog.html">blog</a> packed with ten tips to help you get the best sleep ever.<br><br>
        </p>
        <img src="https://images.unsplash.com/photo-1546015720-b8b30df5aa27?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">
    </article>

    <article class="postContent">
        <h1>#9: COMMIT TO 10 MINUTES A DAY</h1>
        <p>I get asked a lot about the best workout routine for beginners at home. And my answer is always the same: it depends on what’s right for you! Some people love running, some people hate it. Some people totally dig yoga, others think it’s boring.<br><br> Really, the main thing that matters is that you just get moving on a regular basis. For that, I recommend committing to 10 minutes a day. Seriously, it seems like such a small number, but getting in a daily habit of making time for yourself
            and getting active is huge.<br><br> And we have a ton of great, short workouts to help you along! Check out our LSF app — you can get it in the <a href="https://apps.apple.com/us/">iTunes</a> and <a href="https://play.google.com/store/apps">Google Play store</a>.<br><br>
        </p>
    </article>

    <article class="postContent">
        <h1>#10: MIX UP YOUR WORKOUTS</h1>
        <p>If you want a better workout routine, it might be because your current one is stagnant. Whether you’re not seeing gains or you’re just plain bored, it’s time to change things up! Do a YouTube video one day, drop in on a virtual barre class the
            next, create your own free weight workout the next, then use an LSF workout — you get the idea.<br><br> Mix it up to keep things fresh for your body and your mind.<br><br> Your best workout routine is waiting!<br><br>
            <video controls>
                <source src="images/video1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video><br><br>
        </p>
        <p style="text-align: center;">You've been reading for: <em><output id="result"></output></em></p>
        <!-- <p style="text-align: center;" id="reminder"></p>    -->
    </article>

    <div class="wrapper" id="postCommentSection">
        <form action="" method="POST" class="form">
            <div class="row">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your Name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email" required>
                </div>
            </div>
            <div class="input-group textarea" style="width:96%;">
                <label for="comment">Comment</label>
                <textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Post Comment</button>
            </div>
        </form>
        <hr style="margin: 3% 10% 0 10% ">

        <div class="prev-comments">
            <?php

            $sql = "SELECT * FROM comments";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

            ?>
                    <div class="single-item">
                        <h4>
                            <?php
                            // Showing the date in our format
                            $showDate = $row['date'];
                            $showDateExp = explode("-", explode(" ", $showDate)[0]);
                            $showDateExp = array_reverse($showDateExp, false);
                            $showDateImp = implode(".", $showDateExp) . " - " . explode(" ", $showDate)[1];
                            $len = strlen($showDateImp);
                            $showDateImp = substr($showDateImp, 0, $len - 3);

                            $name = $row['name'];
                            
                            // Showing only the first name
                            $keywords = preg_split("/[\s,]+/", $name);
                            $name = $keywords[0];

                            // removing all the numbers from name
                            $nameFixed = ucwords($name);
                            $nums = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
                            $nameFixed = str_replace($nums, "", $nameFixed);
                            $nameFixed = ucwords($nameFixed);
                            
                            //echo $row['name']."\t".$showDateImp;
                            //printf("[%010s]\n",    $showDateImp);
                            printf("%s on %s", $nameFixed, $showDateImp);
                            ?>
                        </h4>
                        <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
                        <p><?php echo $row['comment']; ?></p>
                    </div>
            <?php

                }
            }

            ?>
        </div>
    </div>



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

</body>

<style>
    .wrapper {
        padding: 20px;
        background: #FFF;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        width: 50%;
        min-height: 400px;
        margin-left: 25%;
    }

    .wrapper .row {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    }

    .wrapper .form .row .input-group {
        padding: 0 10px;
        display: block;
    }

    .wrapper .form .row .input-group:first-child {
        padding-left: 0;
    }

    .wrapper .form .row .input-group:last-child {
        padding-right: 0;
    }

    .wrapper .form .input-group {
        width: 90%;
        height: 50px;
        margin-bottom: 50px;
    }

    .wrapper .form .input-group label {
        font-weight: 600;
        margin-bottom: 5px;
        display: block;
    }

    .wrapper .form .input-group .btn {
        margin: 20px 0;
        display: block;
        padding: .7rem 2rem;
        opacity: .8;
        color: #FFF;
        background: #40aed7;
        border: none;
        outline: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 1rem;
        transition: .3s ease-in;
    }

    .wrapper .form .input-group .btn:hover {
        opacity: 1;
    }

    .wrapper .form .input-group input,
    .wrapper .form .input-group textarea {
        width: 100%;
        height: 100%;
        border: 1px solid #40aed7;
        outline: none;
        padding: 5px 10px;
        background-color: #fff;
    }

    .wrapper .form .input-group.textarea {
        height: 200px;
    }

    .wrapper .form .input-group.textarea textarea {
        resize: none;
    }

    .wrapper .prev-comments {
        margin-top: 50px;
    }

    .wrapper .prev-comments .single-item {
        background: #FFF;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        padding: 10px 20px;
        text-align: left;
        margin-bottom: 25px;
    }

    .wrapper .prev-comments .single-item h4 {
        font-size: 1.3rem;
        font-weight: 800;
        color: #111;
    }

    .wrapper .prev-comments .single-item a {
        margin: 10px 0;
        font-size: 1rem;
        color: #111;
        text-decoration: none;
        display: inline-block;
    }

    .wrapper .prev-comments .single-item p {
        font-size: .9rem;
        color: #111;
    }
</style>

</html>