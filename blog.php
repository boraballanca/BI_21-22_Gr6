<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="myStyle.css">
    <title>Blog - Astounding</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    <script>
        var clicked = false;

        function buttonClick() {
            if (!clicked) {
                var container = document.getElementById("botPosts");
                var section = document.getElementById("up1");
                var clone = section.cloneNode(true);
                clone.id = "up7";
                clone.querySelector('.imageDesc').innerHTML = "Is Cardio Actually That Important?";
                var section2 = container.appendChild(clone);
                section2.style.backgroundImage = "url('images/blogimg10.jpeg')";
                section2.setAttribute("onclick", "clickPost()");
                clicked = true;
            } else {
                alert("There are no more posts.")
            }
            var button = document.getElementById("viewAllButton");
            button.style.margin = "350px 400px 0 0";
            button.style.left = "200px";
        }

        function clickPost() {
            location.href = 'post.php';
        }
    </script>

    <?php

    class Post
    {
        // Properties
        private $title;
        private $id;
        private $style;

        // Methods
        function __construct($title, $id, $style)
        {
            $this->title = $title;
            $this->id = $id;
            $this->style = $style;
        }

        function __destruct() {
            echo "<script>console.log('The object got destructed');</script>";
          }        

        function set_title($title)
        {
            if (strlen($title) < 2) {
                throw new Exception("Title must be longer than two(2) characters.");
            }
            $this->title = $title;
        }
        function get_title()
        {
            return $this->title;
        }

        function set_id($id)
        {
            if (strlen($id) > 4) {
                throw new Exception("ID can't not be longer than 4 characters.");
            }            
            $this->id = $id;
        }
        function get_id()
        {
            return $this->id;
        }

        function set_style($style)
        {
            $this->style = $style;
        }
        function get_style()
        {
            return $this->style;
        }

        function showPost(): void
        {
            echo '
                    <a href="post.php">
                        <div class="usualPost" id=' . $this->id . ' style="' . $this->style . '">
                            <p class="imageDesc">' . $this->title . '</p>
                        </div>
                    </a>';
        }
    }

    class BigPost extends Post
    {

        function __construct($title, $id, $style)
        {
            parent::__construct($title, $id, $style);
        }        

        function showPost(): void
        {
            echo '
                    <a href="post.php">
                        <div id="' . parent::get_id() .'">
                            <p>' . parent::get_title() . '</p>
                        </div>
                    </a>';
        }
    }
    ?>

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


    <main>
        <div class="topPosts">
            <div id="topLeft">
                <!-- <a href="post.php">
                    <div id="topPost1">
                        <p>Make your Workouts More Effective</p>
                    </div>
                </a> -->

                <!-- <a href="post.php">
                    <div id="topPost2">
                        <p>How to Get Bigger and Stronger: A Top 5 List</p>
                    </div>
                </a> 
                </div>-->                

                <?php
                    $post = new BigPost("Make your Workouts More Effective", "topPost1", "");
                    $post->showPost();           
                    
                    $post = new BigPost("How to Get Bigger and Stronger: A Top 5 List", "topPost2", "");
                    $post->showPost();       
                    
                    echo "</div>";
                ?>

            <a href="post.php">
                <div id="topPostBig">
                    <p>How to Have a Better Workout Routine</p>
            </a>
        </div>

        </div>

        <div class="botPosts" id="botPosts">

            <!-- Displaying all the posts from database -->
            <?php
            include 'config.php';
            $sql = "SELECT * FROM post order by id";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $post = new Post($row['title'], $row['id'], $row['style']);
                    $post->showPost();
                    unset($post); 
                }
            }            
            ?>

            <!--<a href="post.php">
                <div class="usualPost" id="up2">
                    <p class="imageDesc">How to Stay in Shape With a Busy Lifestyle</p>
                </div>
            </a> 
            <a href="post.php">
                <div class="usualPost" id="up3" style="margin-right:0%;">
                    <p class="imageDesc">Healthy recipes ??? The tastier, the better!</p>
                </div>
            </a>

            <a href="post.php">
                <div class="usualPost" id="up4">
                    <p class="imageDesc">How to Eat Healthy Without Going Broke</p>
                </div>
            </a>

            <a href="post.php">
                <div class="usualPost" id="up5">
                    <p class="imageDesc">The Best Post Workout Routine</p>
                </div>
            </a>

            <a href="post.php">
                <div class="usualPost" id="up6" style="margin-right:0%;">
                    <p class="imageDesc">How to Avoid Gaining Weight During the Holidays</p>
                </div>
            </a>-->
        </div>
        <div class="buttonSpace">
            <button type="button" name="viewAll" class="usualButton" id="viewAllButton" onclick="buttonClick()">View all</button>
        </div>
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
                        <p><a href="post.php">Read More ??</a></p>
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
                <p>Copyright &copy; 2013 Domain Name - All Rights Reserved</small></p>
            </address>
        </div>
    </footer>
</body>

</html>