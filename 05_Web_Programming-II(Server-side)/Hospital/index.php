<?php include 'set_cookie.php' ?>
<?php include 'session.php' ?>
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit']))
{

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $gender = $_POST['gender'];
   $address = $_POST['address'];   
   $date = $_POST['date'];
   

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, gender,address,date) VALUES('$name','$email','$number','$gender','$address','$date')") or die('query failed');

   if($insert)
   {
      $message[] = 'appointment made successfully!';
   }
   else
   {
      $message[] = 'appointment failed';
   }

}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = array();

    // Validate name
    $name = $_POST["name"];
    if (empty($name)) {
        $message[] = "Name is required";
    }

    // Validate number
    $number = $_POST["number"];
    if (empty($number)) {
        $message[] = "Number is required";
    } elseif (!preg_match("/^\d{10}$/", $number)) {
        $message[] = "Number should be a 10-digit numeric value";
    }

    // Validate email
    $email = $_POST["email"];
    if (empty($email)) {
        $message[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message[] = "Invalid email format";
    }

    // Validate gender
    $gender = $_POST["gender"];
    if (empty($gender)) {
        $message[] = "Gender is required";
    }

    // Validate address
    $address = $_POST["address"];
    if (empty($address)) {
        $message[] = "Address is required";
    }

    // Validate date
    $date = $_POST["date"];
    if (empty($date)) {
        $message[] = "Date is required";
    }

    if (empty($message)) {
        
        echo '<script type="text/javascript">window.onload = function () { alert("Appointment submitted successfully"); }</script>';
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- custom css link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- header section -->
    <header class = "header">
        <a href="#" class ="logo"><i class="fas fa-heartbeat"></i> <strong>WC</strong>medical</a>
        <nav class = "navbar">
            <a href="#home"> home </a>
            <a href="#about"> about </a>
            <a href="#services"> services </a>
            <a href="#doctors"> doctors </a>
            <a href="#appointment"> appointment </a>
            <a href="#review"> review </a>
            <a href="#blogs"> blogs </a>
        </nav>
        <div id = "menu-btn" class = "fas fa-bars"></div>
    </header>


    <!-- home section -->
    <section class = "home" id = "home">

        <div class="image">
            <img src="images/home-img.svg" alt="">
        </div>
        <div class = "content">
            <h3>We take care of your<br> healthy life</h3>
            <p>A person who has good physical health is likely to have bodily functions and <br> processes working at their peak. </p>
            <a href="#appointment" class="btn"> appointment us <span class = "fas fa-chevron-right"></span></a>
        </div>
    </section>


    <!-- icons section -->

    <section class = "icons-container">
        <div class="icons">
            <i class = "fas fa-user-md"></i>
            <h3>150+</h3>
            <p>doctors at work</p>
        </div>
        <div class="icons">
            <i class = "fas fa-users"></i>
            <h3>1030+</h3>
            <p>satisfied patients</p>
        </div>
        <div class="icons">
            <i class = "fas fa-procedures"></i>
            <h3>490+</h3>
            <p>bed facility</p>
        </div>
        <div class="icons">
            <i class = "fas fa-hospital"></i>
            <h3>70+</h3>
            <p>available hospitals</p>
        </div>
        
    </section>

    <!-- about section -->
    <section class ="about" id="about">
        <h1 class = "heading"><span>about </span>us</h1>

        <div class ="row">
            <div class ="image">
                <img src="images/about-img.svg" alt="">
            </div>

            <div class = "content">
                <h3>take the world's best quality treatment</h3>
                <p>Our hospital has a longstanding reputation for clinical excellence and has consistently received recognition for our exceptional patient care and outcomes. We believe in the power of collaboration, innovation, and the relentless pursuit of better healthcare solutions, allowing us to offer a range of medical services and treatments that are truly world-class.</p>
                <p>Every member of our staff, from our skilled physicians and nurses to our dedicated support teams, shares a common goal: to provide you with the finest medical treatment available. Your health and your journey to recovery are of paramount importance to us.</p>
                <a href="#" class = "btn">learn more <span class ="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </section>

    <!-- services section -->
    <section class ="services" id="services">
        <h1 class = "heading">our <span>services </span></h1>

        <div class ="box-container">
            <div class = "box">
                <i class = "fas fa-notes-medical"></i>
                <h3>free checkups</h3>
                <p> We are dedicated to your well-being, and that's why we offer free checkups to ensure you have access to the necessary healthcare resources without financial constraints. </p>
                <a href="#" class ="btn">learn more <span class = "fas fa-chevron-right"></span></a>
            </div>

            <div class = "box">
                <i class = "fas fa-ambulance"></i>
                <h3>24/7 ambulance</h3>
                <p>Health emergencies don't keep office hours, and neither do we. Our 24/7 ambulance services are at the ready to respond swiftly to your medical needs.</p>
                <a href="#" class ="btn">learn more <span class = "fas fa-chevron-right"></span></a>
            </div>

            <div class = "box">
                <i class = "fas fa-user-md"></i>
                <h3>expert doctors</h3>
                <p> Our doctors are committed to providing you with the best medical care available.They combine their knowledge, experience, and empathy to diagnose and treat a wide range of health conditions, </p>
                <a href="#" class ="btn">learn more <span class = "fas fa-chevron-right"></span></a>
            </div>

            <div class = "box">
                <i class = "fas fa-pills"></i>
                <h3>medicines</h3>
                <p>A crucial component of effective healthcare is access to the right medications. Our in-house pharmacy is stocked with a comprehensive.</p>
                <a href="#" class ="btn">learn more <span class = "fas fa-chevron-right"></span></a>
            </div>

            <div class = "box">
                <i class = "fas fa-procedures"></i>
                <h3>bed facility</h3>
                <p>When hospitalization is necessary, we offer comfortable and well-equipped bed facilities to cater to your healthcare needs. Our patient rooms are designed to provide you with a peaceful and healing environment. </p>
                <a href="#" class ="btn">learn more <span class = "fas fa-chevron-right"></span></a>
            </div>

            <div class = "box">
                <i class = "fas fa-heartbeat"></i>
                <h3>total cares</h3>
                <p>Total care is not just a slogan; it's our commitment to you.Our healthcare approach goes beyond medical treatment to encompass emotional support, understanding, and holistic well-being. </p>
                <a href="#" class ="btn">learn more <span class = "fas fa-chevron-right"></span></a>
            </div>

        </div>
    </section>

    <!-- doctor section -->

    <section class = "doctors" id = "doctors">
        <h1 class = "heading">our <span>doctors</span></h1>

        <div class = "box-container">
            <!-- doctor 1 -->
            <div class = "box">
                <img src="images/doc-1.jpg" alt="">
                <h3>Dr. Isabella McHealer</h3>
                <span>expert doctor</span>

                <div class="share">
                    <a href="#" class ="fab fa-facebook-f"></a>
                    <a href="#" class ="fab fa-twitter"></a>
                    <a href="#" class ="fab fa-instagram"></a>
                    <a href="#" class ="fab fa-linkedin"></a>
                </div>
            </div>

            <!-- doctor 2 -->
            <div class = "box">
                <img src="images/doc-2.jpg" alt="">
                <h3>Dr. Jonathan Wellby</h3>
                <span>expert doctor</span>

                <div class="share">
                    <a href="#" class ="fab fa-facebook-f"></a>
                    <a href="#" class ="fab fa-twitter"></a>
                    <a href="#" class ="fab fa-instagram"></a>
                    <a href="#" class ="fab fa-linkedin"></a>
                </div>
            </div>

            <!-- doctor 3 -->
            <div class = "box">
                <img src="images/doc-3.jpg" alt="">
                <h3>Dr. Emily Diagnosia</h3>
                <span>expert doctor</span>

                <div class="share">
                    <a href="#" class ="fab fa-facebook-f"></a>
                    <a href="#" class ="fab fa-twitter"></a>
                    <a href="#" class ="fab fa-instagram"></a>
                    <a href="#" class ="fab fa-linkedin"></a>
                </div>
            </div>

            <!-- doctor 4 -->
            <div class = "box">
                <img src="images/doc-4.jpg" alt="">
                <h3>Dr. Amanda Heartwell</h3>
                <span>expert doctor</span>

                <div class="share">
                    <a href="#" class ="fab fa-facebook-f"></a>
                    <a href="#" class ="fab fa-twitter"></a>
                    <a href="#" class ="fab fa-instagram"></a>
                    <a href="#" class ="fab fa-linkedin"></a>
                </div>
            </div>
            <div class = "box">
                <img src="images/doc-5.jpg" alt="">
                <h3>Dr. Victor Pulseman</h3>
                <span>expert doctor</span>

                <div class="share">
                    <a href="#" class ="fab fa-facebook-f"></a>
                    <a href="#" class ="fab fa-twitter"></a>
                    <a href="#" class ="fab fa-instagram"></a>
                    <a href="#" class ="fab fa-linkedin"></a>
                </div>
            </div>

            <div class = "box">
                <img src="images/doc-6.jpg" alt="">
                <h3>Dr. Thomas Mendicillin</h3>
                <span>expert doctor</span>

                <div class="share">
                    <a href="#" class ="fab fa-facebook-f"></a>
                    <a href="#" class ="fab fa-twitter"></a>
                    <a href="#" class ="fab fa-instagram"></a>
                    <a href="#" class ="fab fa-linkedin"></a>
                </div>
            </div>

            <div class = "box">
                <img src="images/doc-7.jpg" alt="">
                <h3>Dr. Lily Maladies</h3>
                <span>expert doctor</span>

                <div class="share">
                    <a href="#" class ="fab fa-facebook-f"></a>
                    <a href="#" class ="fab fa-twitter"></a>
                    <a href="#" class ="fab fa-instagram"></a>
                    <a href="#" class ="fab fa-linkedin"></a>
                </div>
            </div>

            <div class = "box">
                <img src="images/doc-8.jpg" alt="">
                <h3>Dr. Robert Panaceaton</h3>
                <span>expert doctor</span>

                <div class="share">
                    <a href="#" class ="fab fa-facebook-f"></a>
                    <a href="#" class ="fab fa-twitter"></a>
                    <a href="#" class ="fab fa-instagram"></a>
                    <a href="#" class ="fab fa-linkedin"></a>
                </div>
            </div>

            <div class = "box">
                <img src="images/doc-9.jpg" alt="">
                <h3>Dr. Harrison Remedyson</h3>
                <span>expert doctor</span>

                <div class="share">
                    <a href="#" class ="fab fa-facebook-f"></a>
                    <a href="#" class ="fab fa-twitter"></a>
                    <a href="#" class ="fab fa-instagram"></a>
                    <a href="#" class ="fab fa-linkedin"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- appointment section  -->

    <section class="appointment" id = "appointment">
        <h1 class="heading"><span>appointment</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="images/appointment-img.svg" alt="">
            </div>
                        
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <?php
                if(isset($message))
                {
                    foreach($message as $message)
                    {
                        echo '<p class = "message">' .$message. '</p>';
                    }
                }
            ?>          
                <h3>make an appointment</h3>
                
                <input type="text" name="name" placeholder="your name" class="box">
                
                <input type="number" name="number" placeholder="your number" class="box">
                <input type="email" name="email" placeholder="your email" class="box">
                <div class = "box">
                    <h4>Gender</h4>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                    <input type="radio" name="gender" value="other"> Other	
                </div> 
                <input type="text" name="address" placeholder="your address" class="box">               
                <input type="datetime-local" name="date" placeholder="your name" class="box">
                <input type="submit" name="submit" value = "appointment now" class="btn">
            </form>
        </div>
    </section>

    <!-- review section  -->
    <section class="review" id = "review">

        <h1 class = "heading">Client's <span>review</span> </h1>

        <div class = "box-container">
            <div class = "box">
                <img src="images/client_1.jpg" alt="">
                <h3>Ramit Sethi</h3>
                <div class = "stars">
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start-half-alt"></i>
                </div>
                <p class ="text">"I recently had surgery at this hospital, and I was incredibly impressed with the level of care and attention I received. The staff were compassionate, and the facility was clean and well-maintained."</p>
            </div>
            <div class = "box">
                <img src="images/client_2.jpeg" alt="">
                <h3>John Smith</h3>
                <div class = "stars">
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start-half-alt"></i>
                </div>
                <p class ="text">"I've been a patient at this hospital multiple times, and each visit has been positive. The medical staff is competent, and the hospital is well-equipped to handle various medical issues."</p>
            </div>
            <div class = "box">
                <img src="images/client_3.png" alt="">
                <h3>Emily Johnson</h3>
                <div class = "stars">
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start"></i>
                    <i class ="fas fa-start-half-alt"></i>
                </div>
                <p class ="text">"The pediatric department at this hospital is excellent. They took great care of my child and made sure they were comfortable during their stay. The child-friendly environment helped ease their fears."</p>
            </div>
        </div>
    </section>

    <!-- blogs section  -->
    <section class ="blogs" id="blogs">

        <h1 class = "heading"> our <span>blogs</span> </h1>

        <div class = "box-container">

                <div class="box">
                    <div class="image">
                        <img src="images/blog-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class ="fas fa-calender"></i>23th May,2023</a>
                            <a href="#"><i class ="fas fa-user"></i>by Laura Reynolds</a>
                        </div>
                        <h3>Exploring the Latest Advancements in Medical Technology</h3>
                        <p> In this blog, you can discuss cutting-edge medical innovations, breakthroughs in treatments, and the impact of technology on patient care.</p>
                        <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="images/blog-2.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class ="fas fa-calender"></i>19th October,2023</a>
                            <a href="#"><i class ="fas fa-user"></i>by Sarah Mitchell</a>
                        </div>
                        <h3>Patient Success Stories</h3>
                        <p>In this blog series, you can share real-life stories of patients who have overcome various health challenges, emphasizing their journeys from diagnosis to recovery. These stories can provide inspiration and reassurance to individuals going through similar situations.. Include details about the treatments..</p>
                        <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="images/blog-3.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class ="fas fa-calender"></i>18th October,2023</a>
                            <a href="#"><i class ="fas fa-user"></i>by Tony stark</a>
                        </div>
                        <h3>Healthy Living: Tips for a Balanced Lifestyle</h3>
                        <p> In this blog, you can explore various aspects of maintaining a healthy and balanced lifestyle, including nutrition, exercise, mental well-being, and stress management. Offer practical tips, advice, and strategies for readers to make positive changes in their lives.</p>
                        <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="images/blog-4.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class ="fas fa-calender"></i>17th July,2023</a>
                            <a href="#"><i class ="fas fa-user"></i>by Ethan Hunt</a>
                        </div>
                        <h3>Managing Stress and Anxiety: Your Mental Health Matters</h3>
                        <p>This topic is relevant and can provide valuable information and support for readers looking to improve their well-being.</p>
                        <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="images/blog-5.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class ="fas fa-calender"></i>20th August,2023</a>
                            <a href="#"><i class ="fas fa-user"></i>by James Bond</a>
                        </div>
                        <h3>Cancer Awareness and Early Detection</h3>
                        <p> Cancer awareness is vital in promoting early detection, which can significantly improve the chances of successful treatment and recovery.You can also share stories of cancer survivors, provide guidance on recognizing ..</p>
                        <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
                <div class="box">
                    <div class="image">
                        <img src="images/blog-6.jpg" alt="">
                    </div>
                    <div class="content">
                        <div class="icon">
                            <a href="#"><i class ="fas fa-calender"></i>21st October,2023</a>
                            <a href="#"><i class ="fas fa-user"></i>by John Wick</a>
                        </div>
                        <h3>The Power of Nutrition</h3>
                        <p>In this blog, you can explore various aspects of nutrition, including the impact of a balanced diet on physical and mental well-being.You can provide tips on making healthy food choices, discuss the benefits of different nutrients, and offer practical..</p>
                        <a href="#" class="btn">learn more <span class="fas fa-chevron-right"></span></a>
                    </div>
                </div>
        </div>

    </section>

    <!-- footer section  -->

    <section class ="footer">

        <div class = "box-container">

            <div class = "box">
                <h3>quick links</h3>
                <a href="#"><i class = "fas fa-chevron-right"></i> home </a>
                <a href="#"><i class = "fas fa-chevron-right"></i> about </a>
                <a href="#"><i class = "fas fa-chevron-right"></i> services </a>
                <a href="#"><i class = "fas fa-chevron-right"></i> doctors </a>
                <a href="#"><i class = "fas fa-chevron-right"></i> appointment </a>
                <a href="#"><i class = "fas fa-chevron-right"></i> review </a>
                <a href="#"><i class = "fas fa-chevron-right"></i> blogs </a>
            </div>

            <div class = "box">
                <h3>our services</h3>
                <a href="#"><i class = "fas fa-chevron-right"></i> dental care </a>
                <a href="#"><i class = "fas fa-chevron-right"></i> massage therapy </a>
                <a href="#"><i class = "fas fa-chevron-right"></i> cardiology </a>
                <a href="#"><i class = "fas fa-chevron-right"></i> diagnosis </a>
                <a href="#"><i class = "fas fa-chevron-right"></i> ambulance service </a>
            </div>

            <div class = "box">
                <h3>Appointment info</h3>
                <a href="#"><i class = "fas fa-phone"></i> +91 9769456713 </a>
                <a href="#"><i class = "fas fa-phone"></i> +91 9749676717 </a>
                <a href="#"><i class = "fas fa-envelope"></i> keyur.patel100@gmail.com </a>
                <a href="#"><i class = "fas fa-envelope"></i> karan.patel@gmail.com </a>
                <a href="#"><i class = "fas fa-map-marker-alt"></i> mumbai, India </a>
            </div>

            <div class = "box">
                <h3>Social media</h3>
                <a href="#"><i class = "fab fa-facebook"></i> Facebook </a>
                <a href="#"><i class = "fab fa-twitter"></i> twitter </a>
                <a href="#"><i class = "fab fa-whatsapp"></i> whatsapp </a>
                <a href="#"><i class = "fab fa-instagram"></i> instagram </a>
                <a href="#"><i class = "fab fa-linkedin"></i> linkedin </a>
            </div>
        </div>

        <div class = "credit">created by <span>Keyur & karan</span> | @ all rights reserved</div>
    
    </section>

    <!-- js file link  -->
    <script src ="js/healthcare.js"></script>
    
    

</body>
</html>


    