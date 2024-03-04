<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Google Developer Group Jammu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <meta name="keywords" content="GDG Jammu, Google Developer Group Jammu" >

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <script
      src="https://kit.fontawesome.com/8cb3487569.js"
      crossorigin="anonymous"
    ></script>
    <script defer src="./index.js"></script>
  </head>
  <body>
  <?php 
include 'header.php';
?>

    <main>
      <div class="container">
      <?php include 'banner.php';?>
      


        
        <!-- ------------------------  Hero Section  ------------------------ -->

        <section class="hero">
        <div class="hero-img">
            <img src="images/collab.gif" alt="graphics" style="margin-left:auto;
            margin-right: auto;" />
          </div>
          <div class="hero-text">
            <h3 class="hero-text-title">
            Our Collaboration
            </h3>
            <p class="hero-text-body">
            We collaborates across J&K, uniting through technology for positive change, community empowerment, and lasting socio-economic impact. Join us!
            </p>
            <a class="hero-text-button" href="https://gdg.community.dev/gdg-jammu/">Partner with us</a>
          </div>
          
        </section>

        
        <!-- ------------------------  Products Section  ------------------------ -->

        <section class="partner">
        <div class="slider-area">
    <h1 class="products-title" style="margin: 2rem;">
            Recent <span class="highlight">Partners</span>
          </h1>
		<div class="wrapper" style="padding: 1rem;
	display: flex;
  width: 90%;
	margin: 0 auto;
	overflow: hidden;">
    <div class="item"><img alt="" src="./images/jkedi.png"></div>
			<div class="item"><img alt="" src="./images/iitjammu.png"></div>
			<div class="item"><img alt="" src="./images/smvdu.png"></div>
      <div class="item"><img alt="" src="./images/ju.png"></div>
			<div class="item"><img alt="" src="./images/gdsciit.png"></div>
			<div class="item"><img alt="" src="./images/gdscmiet.png"></div>
      
		</div>
	</div>
        </section><section class="community-guidlines">
  <div class="community-guidlines-container">
    <div class="community-guidlines-text">
      <h3 class="community-guidlines-text-title">
        Our community guidelines
      </h3>
      <p class="community-guidlines-description">
        Google is dedicated to providing a harassment-free and inclusive event experience for everyone regardless of gender identity and expression, sexual orientation, disabilities, neurodiversity, physical appearance, body size, ethnicity, nationality, race, age, religion, or other protected category.
  
      </p>
      <a href="https://developers.google.com/community-guidelines" class="community-guidlines-cta
      ">Read our community guidelines</a>
    </div>
  </div>
  </section>
      </div>
    </main>

<?php 
include 'footer.php';
?>
 
    <script>
     function redirectToHomePage() {
          // Change the window location to the desired URL
          window.location.href = "index.php";
      }
      function redirectToDevfest22() {
          // Change the window location to the desired URL
          window.location.href = "https://devfest.gdgjammu.com/";
      }
      function redirectToAbout() {
          // Change the window location to the desired URL
          window.location.href = "https://developers.google.com/community/gdg";
      }
       function redirectToWomenTechmaker() {
          // Change the window location to the desired URL
          window.location.href = "https://gdg.community.dev/events/details/google-gdg-jammu-presents-international-womens-day-iwd-jammu-2023/";
      }
       function redirectToCommunity() {
          // Change the window location to the desired URL
          window.location.href = "community.php";
      }
      function redirectToRecent() {
          // Change the window location to the desired URL
          window.location.href = "recent.php";
      }
  </script>
  </body>
  
</html>
