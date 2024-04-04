<!DOCTYPE html>
<html>
<head>
  <title>Zero Hunger</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="path/to/zerohunger.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style type="">
   body {
            background-color:#ffefd5;
            
        }
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><img src="logoHead.png" alt="Zero Hunger" style="max-width: 100px;">
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="howitworks.php" class="w3-bar-item w3-button">How It Works</a>
      <a href="aboutus.php" class="w3-bar-item w3-button">About Us</a>
      <a href="mailto:zerohunger@gmail.com" class="w3-bar-item w3-button">Email Us</a>
      <a href="register_form.php" class="w3-bar-item w3-button">SignUp</a>
      <a href="login_form.php" class="w3-bar-item w3-button">SignIn</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="mainImg.png" alt="Zero Hunger" width="1500" height="800">
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- How it works Section -->
  <div class="w3-container w3-padding-32" id="how-it-works">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Our Mission</h3>
    <p>Different aspects that helps us contribute to our mission of no wastage of food.</p>
    <div class="w3-row-padding">
      <div class="w3-col l4 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="1.jpg" alt="Recipe" style="width:100%">
          <div class="w3-container">
            <h3>Food Donors</h3>
            <p>Local Markets and Stores that provide us with their surplus food.</p>
          </div>
        </div>
      </div>
      <div class="w3-col l4 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="2.jpg" alt="Recipe" style="width:100%">
          <div class="w3-container">
            <h3>Food Banks</h3>
            <p>We work in tandum with storages spaces to properly store the food until distribution.</p>
          </div>
        </div>
      </div>
      <div class="w3-col l4 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="3.jpg" alt="Recipe" style="width:100%">
          <div class="w3-container">
            <h3>Community Volunteers</h3>
            <p>From getting food, organizing and distribution, we rely on individuals with feeling of community service.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  
<!-- Image of location/map -->
<div class="w3-container">
  <img src="hero.jpg" class="w3-image" style="width:100%">

</div>

<!-- End page content -->
</div>

<!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="interestForm">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Be the part of Community</h3>
    <p>Let's get in touch and work together to fight hunger in our communities.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Message" required name="Message">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"href="mailto:zerohunger@gmail.com" class="w3-bar-item w3-button"></i> SEND MESSAGE
      </button>
    </form>
  </div>

</body>
</html>
