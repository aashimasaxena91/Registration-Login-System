<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Aashima Saxena</title>
    <link rel="stylesheet" type="text/css" href="css/style_portfolio.css">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Gentium+Book+Basic&family=Lora:wght@600&family=Sacramento&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
  </head>

  <body>

    <div class="top-container">
      <div class="top">
          <?php  if (isset($_SESSION['username'])) : ?>
            <h2 class="wel"><strong><u> <?php echo $_SESSION['username']; ?></u></strong> Logged In</h2>
          <?php endif ?>
        </div>
        <div class="logout">
          <?php  if (isset($_SESSION['username'])) : ?>
           <a class="log" href="index.php?logout='1'" ;">logout</a>
         <?php endif ?>
        </div>
      <img class="top-cloud" src="images/cld.png" alt="cloud-img">
      <div class="name">
        <h1>I am Aashima </h1>
        <h2>Welcome to my webpage.</h2>
      </div>
      <img class="bottom-cloud" src="images/cld.png" alt="cloud-img">
      <img class="forest-img"src="images/forest.png" alt="forest-img">
    </div>

    <div class="middle-container">
      <div class="profile">
        <img class="" src="images/person.png" alt="">
        <h2>Hello!</h2>
        <p class="intro">This is Aashima Saxena. I have keen interest in sketching and like to play badminton. Here is my portfolio, Hope you guys like it 😉 </p>
      </div>
      <hr>
      <div class="Education">
        <h2>Educational Qualifications</h2>
        <div class="education-r">
          <h3>Bachelor in Information Technology</h3>
          <p>I am currently pursuing Btech Degree in IT from Ajay Kumar Garg Engineering college under the AKTU University.</p>
        </div>
        <div class="educations">
          <h3>Class 12th</h3>
          <p>I have passed Class 12th with 91.4% from Lovely Public Sr. Sec. School, East Delhi under the CBSE Board.</p>
        </div>
        <div class="education-r">
          <h3>Class 10th</h3>
          <p>I have cleared Class 10th with 10 CGPA from Lovely Public Sr. Sec. School, East Delhi under the CBSE Board.</p>
        </div>
      </div>
      <hr>
      <div class="skills">
        <h2>My Skills</h2>
        <div class="skill-one">
          <img class="c-img" src="images/cimage.png" alt="C++ Image">
          <h3>C++</h3>
          <div><p>I have learnt modern C++ language in my school and now I am Proficient in coding.</p></div>
        </div>
        <div class="skill-two">
          <img class="code-img" src="images/code.png" alt="">
          <h3>HTML & CSS</h3>
        <div><p>I have started coding in HTML and CSS and is looking forward to the more advanced web development concepts.</p></div>
        </div>
      </div>
    </div>

    <div class="bottom-container">
      <h2>Get In Touch</h2>
      <a class="footer-link" href="https://www.linkedin.com/in/aashima-saxena-976554159">LinkedIn</a>
      <a class="footer-link" href="https://twitter.com/Aashima__Saxena?s=08">Twitter</a>
      <a class="footer-link" href="https://instagram.com/saxena_aashima">Instagram</a>
      <p class="copyright">Copyright © 2020 Aashima Saxena. All rights reserved</p>
    </div>


  </body>
</html>
