<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Portfolio Website</title>
</head>
 
<body>

    <!-- Header Section -->
  
    <header class="header">   
        <a href="#home" class="logo" data-aos="fade-down" data-aos-duration="1000">王子
            <span>| Ōji </span>
        </a>
         
        <!-- Add a button to toggle the navigation bar -->
<i class='bx bx-menu' id="menu-icon" onclick="toggleMenu()"></i>
<script>
    function toggleMenu() {
        document.querySelector('.navbar').classList.toggle('active');
    }
</script>

        <nav class="navbar" data-aos="fade-down" data-aos-duration="1000">
            <a href="#home" class="active">Home</a>
            <a href="#about" class="">About Me</a>
            <a href="#education" class="">Education</a>
            <a href="#project" class="">Project</a>
            <a href="#Achievements" class="">Achievements</a>
            <!-- <a onclick="document.getElementById('himg').src = 'pic.jpg'" class="">Change Image</a> -->
        </nav>
    </header>

    <!-- Home Section -->

    <section class="home" id="home">
        <div class="home-content">
            <h1 data-aos="slide-right" data-aos-duration="1500">Hi, It's <span>Prince</span></h1>
            <h3 class="text-animation" data-aos="slide-right" data-aos-duration="1500">I'm <span></span></h3>

            <p  data-aos="fade-down" data-aos-duration="2000" >By Ōji - 
                After you die, you will achieve immortality, surpassing mortal limits and entering eternity. Hence If you want to be immortal then DIE</p>

            <div class="social-icons" >
                <a   data-aos="flip-right" data-aos-duration="2000" offset="20" href="https://www.linkedin.com/in/prince-466289304?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class='bx bxl-linkedin-square'></i></a>
                <a   data-aos="flip-right" data-aos-duration="2000" offset="20" href="https://github.com/Oji0391" target="_blank"><i class='bx bxl-github'></i></a>
                <a   data-aos="flip-right" data-aos-duration="2000" offset="20" href="https://www.instagram.com/princee_oji/" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                <a   data-aos="flip-right" data-aos-duration="2000" offset="20" href="https://x.com/Princee0178?t=wHMjea793KppnYfIS25IBw&s=08" target="_blank"><i class='bx bxl-twitter'></i></a>
            </div>

            <div class="btn-group" data-aos="fade-up" data-aos-duration="2000" offset="20">
                <a href="resume.html" class="btn">Download CV</a>
                <a href="#contact" class="btn">Contact Me!</a>
            </div>
        </div>
        <div  class="home-img" data-aos="zoom-in-up" data-aos-duration="1300">
            <img  id="himg" src="w.jpeg" alt="Profile">
        </div>
    </section>

    <!-- About Section Code -->

    <section class="about" id="about">
        <div class="about-img" data-aos="fade-right" data-aos-duration="1000"  offset="300">
            <img src="w.jpeg" alt="About Image">
        </div>
    
        <div class="about-content" data-aos="fade-left" data-aos-duration="1000" offset="300">
            <h2 class="heading">
                About <span>Me</span>
            </h2>
            <p>Hey there, I'm Prince, a student currently in my 6th semester of a diploma in Computer Engineering at Guru Daskh Government Polytechnic in Hisar, Haryana. I have a solid foundation in HTML, CSS, basic Python, and I'm currently expanding my skills in the MERN stack.</p>
            <p>I've worked on a couple of exciting projects, including an anime website where I focused on front-end development, and my personal portfolio, which showcases my skills in HTML, CSS, and PHP Mailer.</p>
            <p>I was honored to receive the Outstanding Performance Award from the Department of Computer Engineering at my polytechnic.</p>
            <p>Outside of my academic pursuits, I focus on health and well-being. Looking ahead, I aspire to pursue a Bachelor's degree in Computer Engineering/Science to further my knowledge and career in this field.</p>
            <p>Feel free to connect with me!.</p>
    
            <a href="Under_Construction.html" class="btn">Read More</a>
        </div>
    </section>
    
<!-- Education Section -->

<section id="education" class="education">
    <h2 class="heading" data-aos="zoom-in-down" data-aos-duration="1000" offset="300">Education</h2>
    <div class="timeline-items">
        <div class="timeline-item" data-aos="fade-down" data-aos-duration="1500" offset="300">
            <div class="timeline-dot"></div>
            <div class="timeline-date">2020-2021</div>
            <div class="timeline-content">
                <h3>Class X</h3>
                <p>Done Class X in The Year 2020-2021 From Shree Maharaja Aggarsin Public School Siwani </p>
            </div>
        </div>

        <div class="timeline-item" data-aos="fade-down" data-aos-duration="1500" data-aos-offset=200>
            <div class="timeline-dot"></div>
            <div class="timeline-date">2021-2024</div>
            <div class="timeline-content">
                <h3>Diploma</h3>
                <p>Currently Pursuing Diploma in Computer Engineering Government Polytechnic Hisar</p>
            </div>
        </div> 
    </div>
</section>

<!-- Project section -->

<section class="project" id="project">
    <h2 class="heading" data-aos="zoom-in-up" data-aos-duration="2000" offset="300">My <span>Projects</span></h2>

    <div class="project-container">
        <div class="project-box" data-aos="fade-right" data-aos-duration="2000" offset="300">
            <img src="Anime Web-Project.jpg" alt="">
            <div class="project-layer">
                <h4>Anime Web</h4>
                <p>Created a captivating Anime Website, combining HTML and CSS to craft  a visually appealing frontend, while leveraging PHP and MySQL for robust  backend functionality. Tailored for the Indian audience, the site features Hindi-dubbed content, enhancing accessibility. Pioneered a dubbing audition  form, fostering career opportunities in the vibrant world of anime dubbing.
                </p>
                <a href="Under_Construction.html"><i class='bx bx-right-top-arrow-circle'></i></a>
            </div>
        </div>
            <div class="project-box" data-aos="fade-left" data-aos-duration="2000" offset="300">
                <img src="Portfolio.png" alt="">
                <div class="project-layer">
                    <h4>王子 | Ōji Personal Portfolio</h4>
                    <p>I created my personal portfolio using HTML, CSS, JavaScript, and PHP. My portfolio includes several sections: Home, About Me, Education, My Projects, My Achievements, Contact Me, Feedback Page, Terms Page, and Privacy Policy. The form data is sent to my email.</p>
                    <p>During the development process, I faced challenges with responsive design and connecting forms using PHP, but I managed to overcome them and complete the project successfully.</p>
                    <a href="Under_Construction.html"><i class='bx bx-right-top-arrow-circle'></i></a>
                </div>
            </div>
    </div>
</section>
  <!-- Achievements Section -->

<section id="Achievements" class="Achievements">
    <div class="achievements-box">
        <h2 class="heading" data-aos="fade-down" data-aos-duration="2000" offset="300">Achievements</h2>

        <div class="wrapper">
            
            <div class="achievement-item" data-aos="flip-right" data-aos-duration="2000">
                <img src="Award.jpg" alt="">
                <h2>Award</h2>
                <p>Outstanding Award from the Department of Computer Engineering at Guru Daksh Government Polytechnic Hisar.</p>
                <a href="Under_Construction.html">
                <span style="font-size: 20px;">Read More...</span> </a>
            </div>  
            
            <div class="achievement-item" data-aos="flip-right" data-aos-duration="2000">
                <img src="TCRT.png" alt=""> 
                <h2>Certificate</h2>
                <p>Certified for completing a 31-day training program at Guru Daksh Government Polytechnic, Hisar.</p>
                    <a href="Under_Construction.html">
                        <span style="font-size: 20px;">Read More...</span> </a>
            </div>

            <div class="achievement-item" data-aos="flip-right" data-aos-duration="2000">
                <img src="CCRT.jpg" alt="">
                <h2>Certificate</h2>
                <p>CCNAv7: Introduction to Network Certificate achieved through Cisco.</p>
                    <a href="Under_Construction.html">
                        <span style="font-size: 20px;">Read More...</span> </a>
            </div>

        </div>
    </div>
</section>

 
<!-- Contact Section -->

 <section id="contact" class="contact">
    <h2 class="heading" data-aos="fade-down" data-aos-duration="2000" offset="300">Contact <span>Me</span></h2>
    <form action="" method="POST" >
        <div class="input-group" data-aos="fade-right" data-aos-duration="2000" offset="300">
            <div class="input-box">
                <input type="text" name="full_name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="input-box">
                <input type="number" name="phone_number" placeholder="Phone Number" maxlength="10">
                <input type="text" name="subject" placeholder="Subject">
            </div>
        </div>

        <div class="input-group-2" data-aos="fade-left" data-aos-duration="2000" offset="300">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" name="send" value="Send Message" class="btn">
        </div>
    </form>
</section>

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send']))
{

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phobe_number = $_POST['phone_number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'oji193084@gmail.com';                     //SMTP username
    $mail->Password   = 'jpna emot oaop qrsh';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('oji193084@gmail.com', 'Index');
    $mail->addAddress('oji193084@gmail.com', 'Prince');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact Form Data';
    $mail->Body    = "Sender Name - $full_name <br> Sender Email - $email <br> Phone Number - $phobe_number <br> Subject - $subject <br> Message - $message";

    $mail->send();
    // echo "<div class='success'> Message has been Sent successfully!</div>";
    } 
catch (Exception $e) {
    // echo "<div class='alert'> Message Could't Sent!</div>";
}
}
?>

<!-- Footer Section -->
<footer class="footer">    
    <div class="social">
        <a href="https://www.linkedin.com/in/prince-466289304?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class='bx bxl-linkedin-square'></i></a>
        <a href="https://github.com/Oji0391" target="_blank"><i class='bx bxl-github'></i></a>
        <a href="https://www.instagram.com/princee_oji/" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
        <a href="https://x.com/Princee0178?t=wHMjea793KppnYfIS25IBw&s=08" target="_blank"><i class='bx bxl-twitter'></i></a>
    </div>
    <ul class="list">
        <li><a href="terms&conditions.html">Terms</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#Achievements">Award & Certificate's</a></li>
        <li><a href="#contact">Contact Me</a></li>
        <li><a href="Feedback.php">Feedback</a></li>
        <li><a href="privacy&policies.html">Privacy Policies</a></li>
    </ul>
    <p class="copyright">
        © 王子 Ōji | All Rights Reserved
    </p>
</footer>

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
          
          
        });
    </script>
</body> 
</html>