<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}
?>
<?php

$conn = new mysqli('localhost', 'root', '', 'ratingSystem');

if (isset($_POST['save'])) {
    $uID = $conn->real_escape_string($_POST['uID']);
    $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
    $ratedIndex++;

    if (!$uID) {
        $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
        $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
        $uData = $sql->fetch_assoc();
        $uID = $uData['id'];
    } else
        $conn->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'");

    exit(json_encode(array('id' => $uID)));
}

$sql = $conn->query("SELECT id FROM stars");
$numR = $sql->num_rows;

$sql = $conn->query("SELECT SUM(rateIndex) AS total FROM stars");
$rData = $sql->fetch_array();
$total = $rData['total'];

$avg = $total / $numR;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website create by win coder</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .button-1{
    background-color: black; /* Green */
    border: none;
    border-radius: 5px;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
  }
  .button-1:hover{
      background-color: white;
      color: black;
  }
    </style>

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> <strong>WC</strong>medical </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#appointment">appointment</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
        <a href="signup.html"><button class="button-1" type="submit">SignUp</button></a>
        <a href="signin.html"><button class="button-1" type="submit">Login</button></a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p> A person who has good physical health is likely to have bodily functions and processes working at their peak.</p>
        <a href="#appointment" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>490+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>At wcmedical Health Institute, we are driven by a steadfast commitment to providing
                exceptional healthcare services to our community. Since our founding in [year], we have been at the forefront of medical 
                innovation and compassionate patient care. With a comprehensive range of specialties and state-of-the-art facilities, including 
                [mention notable facilities or technologies], we strive to meet the diverse healthcare needs of our patients with excellence and compassion. 
                Our team of highly skilled physicians, nurses, and support staff are dedicated to delivering personalized care tailored to each 
                individual's unique needs, ensuring that every patient receives the highest quality treatment in a supportive and healing environment.
                 At wcmedical Health Institute, we believe in empowering our patients through education, collaboration, and respect, and 
                we are committed to continually improving our services to exceed the expectations of those we serve.</p>

        </div>

    </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>You can book a full body checkup package on the wc medical website or app, or request a callback from a health advisor.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>The 108 Emergency Response Service is a free emergency service providing integrated medical, police and fire emergency services.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>You can ask as many questions to our Doctors and they will be happy to answer those.All doctors treat, but a good doctor lets nature heal.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Medicines can treat diseases and improve your health. If you are like most people, you need to take medicine at some point in your life.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-procedures"></i>
            <h3>bed facility</h3>
            <p>Hospital beds are one of the essential hospital furniture for any medical facility, from a clinic to a multispeciality hospital.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>Total care is a long-term care facility that is responsible for meeting all the needs of a resident related to their health and life insurance.</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- services section ends -->



<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Vibhuti Gupta</h3>
            <span>Neurologist</span>
            <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
                
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Sarthak Goyal</h3>
            <span>Cardiologist</span>
            <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Divya Arora</h3>
            <span>Ophthalmologist</span>
            <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Rupesh Dembla</h3>
            <span>Nephrologist</span>
            <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-9.jpg" alt="">
            <h3>Khushank Panwar</h3>
            <span>Dermatologist</span>
            <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            
            </div>
        </div>
        <div class="box">
            <img src="image/doc-10.jpg" alt="" style="width:200px;">
            <h3>Ashray Gupta</h3>
            <span>Pathologist</span>
            <div class="share">
            <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- appointmenting section starts   -->

<section class="appointment" id="appointment">

    <h1 class="heading"> <span>appointment</span> now </h1>    

    <div class="row">

        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3>make appointment</h3>
            <input type="text"name="name" placeholder="your name" class="box">
            <input type="number"name="number" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <input type="date"name="date" class="box">
            <input type="submit" name="submit" value="appointment now" class="btn">
        </form>

    </div>

</section>

<!-- appointmenting section ends -->


<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="image/blog-1.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 18 september, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by vibhuti gupta </a>
                </div>
                <h3>Medinnovation and Health Reform</h3>
                <p>Where health reform, medical innovation, and physician practices meet - The leading voice for medical innovation on the internet.</p>
                <a href="https://medinnovationblog.blogspot.com/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-2.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 19 august, 2024 </a>
                    <a href="#"> <i class="fas fa-user"></i> by sarthak goyal </a>
                </div>
                <h3>Tips for Maintaining Your Health as You Get Older</h3>
                <p>Aging is an inevitable part of life, and while it brings wisdom and experience, it also comes with its fair share of health challenges. However,.</p>
                <a href="https://www.healthchek.in/tips-for-maintaining-your-health-as-you-get-older-bg-137" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="image/blog-3.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 25 october, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by rupesh dembla </a>
                </div>
                <h3>The Role of Hydration in Your Health and Wellness</h3>
                <p>Water is the elixir of life, and its significance cannot be overstated. Hydration is fundamental</p>
                <a href="https://www.healthchek.in/the-role-of-hydration-in-your-health-and-wellness-bg-138" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-4.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 05 december, 2022 </a>
                    <a href="#"> <i class="fas fa-user"></i> by khushank panwar </a>
                </div>
                <h3>The Importance of Regular Skin Checkups</h3>
                <p>Your skin, the body's largest organ, demands meticulous care to ensure it remains a resilient barrier</p>
                <a href="https://www.drdivyasharma.com/The-Importance-of-Regular-Skin-Checkups/" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-5.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 7 november, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by ashray gupta </a>
                </div>
                <h3>How Positive Emotions Impact Health</h3>
                <p>In a world filled with stressors and challenges, it's easy to underestimate the profound impact that positive emotions</p>
                <a href="https://www.healthchek.in/how-positive-emotions-impact-health-bg-136" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="image/blog-6.jpg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 27 march, 2024 </a>
                    <a href="#"> <i class="fas fa-user"></i> by divya arora </a>
                </div>
                <h3>10 Healthy Habits for a Happy Heart</h3>
                <p>Our hearts are the resilient engines that power our bodies, beating tirelessly day and night to keep us alive. Taking care of</p>
                <a href="https://www.healthchek.in/onezero-healthy-habits-for-a-happy-heart-bg-132" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->
<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> Give <span>review</span> </h1>
    <div align="center" style="background: #16a085; padding: 50px;color:white; border-radius: 5px;">
    <form action="" style="background: #16a085; padding: 50px;color:white; border-radius: 5px;">
        <input type="text" placeholder="Write your review" style="padding: 10px;color:black; border-radius: 5px;">
    </form>
        <i class="fa fa-star fa-2x" data-index="0"></i>
        <i class="fa fa-star fa-2x" data-index="1"></i>
        <i class="fa fa-star fa-2x" data-index="2"></i>
        <i class="fa fa-star fa-2x" data-index="3"></i>
        <i class="fa fa-star fa-2x" data-index="4"></i>
        <br><br>
        <?php echo round($avg,2) ?>
    <form action="" style="background: #16a085; padding: 50px;color:white; border-radius: 5px;">
        <button type="submit" style="padding: 10px;color:black; border-radius: 5px;">Submit</button>
    </form>
    </div>

    <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script>
        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "index.php",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'green');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }
    </script>

</section>

<!-- review section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#blogs"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +919688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +919782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> group3@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> group3cse25@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> delhi, india </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>group-3</span> | @all rights reserved </div>

</section>

<!-- footer section ends -->


<!-- js file link  -->
<script src="js/script.js"></script>

</body>
</html>

