<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How It Works</title>
    <link rel="stylesheet" href="#">
<style >
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1, h2 {
    color: #333;
    text-align: center;
}

.section {
    margin-bottom: 30px;
}

.donors h2 {
    color: #009900; /* Green color for donors section */
}

.users h2 {
    color: #009900; /* Blue color for users section */
}

.steps {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.step {
    text-align: center;
    margin: 0 20px;
    flex: 1;
}

.step-number {
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50%;
    background-color: #065006; /* Green background for step numbers */
    color: #fff;
    font-size: 20px;
    margin: 0 auto 10px;
}

.step p {
    font-size: 16px;
    line-height: 1.5;
}
.slogan {
    text-align: center;
    margin-bottom: 30px;
}

.slogan img {
    width: 300px; /* Adjust size as needed */
    margin-bottom: 20px;
}

.slogan h3 {
    font-size: 18px;
    color: #555;
}
/* Benefits Section */
.benefits {
    text-align: center;
    padding: 10px 0;
}

.benefits h2 {
    margin-bottom: 30px;
    color: #333;
    font-size: 40px; /* Increase font size */
    font-weight: bold; /* Make bold */
}

.benefits-grid {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.benefit {
    width: 45%;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
}

.benefit img {
    width: 80px;
    height: 80px;
    margin-bottom: 15px;
}

.benefit h3 {
    color: #333;
    font-size: 24px;
    margin-bottom: 15px;
}

.benefit p {
    color: #555;
    font-size: 20px; /* Increase font size */
    font-weight: bold; /* Make bold */
    margin-bottom: 15px;
}

.benefit ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.benefit ul li {
    color: #080707;
    font-size: 17px; /* Increase font size */
    margin-bottom: 10px;
}

.join-us {
    font-family: cursive;
    font-size: 24px;
    text-align: center;
    margin-top: 50px;
}

.sign-up-options {
    text-align: center;
    margin-top: 20px;
}

.sign-up-options a {
    display: inline-block;
    margin: 0 10px;
    padding: 10px 20px;
    background-color: #009900;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.sign-up-options a:hover {
    background-color: #065006;
}
.join-us {
    font-family: cursive;
    font-size: 48px; /* Increased font size */
    text-align: center;
    margin-top: -50px;
    white-space: nowrap; /* Prevent text from wrapping */
    overflow: hidden; /* Hide overflowing text */
}

.join-us span {
    opacity: 0;
    animation: typing 2s infinite alternate; /* Typing animation */
}

@keyframes typing {
    0% {
        opacity: 0; /* Start with hidden text */
    }
    50% {
        opacity: 1; /* Reveal text */
    }
    100% {
        opacity: 0; /* Hide text again */
    }
}

.navbar a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-family: "Pacifico", sans-serif; 
        }

        .navbar a:hover {
            text-decoration: none;
        }

        
        .navbar {
            background-color: #708090;
            border-radius: 0px;
            color: #f0ffff;
            padding: 20px 0;
            font-size: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        

        body {
            background-color:#ffefd5;
            
        }
</style>
</head>
<body>
    <nav class="navbar">
            <a href="Home.php">Food For Everyone</a>
            <a href="Home.php">Home</a>
            <a href="aboutus.php">About Us </a>
            
        </nav>

<div class="container">
    <h1>How It Works</h1>

    <div class="slogan-container">
        <div class="slogan">
            <img src="slogan.jpeg" alt="Slogan Image">
            <h3>Reducing Food Waste, One Donation at a Time</h3>
        </div>
    </div>
    
    <div class="section donors">
        <h2>For Donors</h2>
        <div class="steps">
            <div class="step">
                <div class="step-number">1</div>
                <p>Create a listing of available food items.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <p>Select a location for food pickup.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <p>Users will be able to view and select your listed food items.</p>
            </div>
        </div>
    </div>

    <div class="section users">
        <h2>For Users</h2>
        <div class="steps">
            <div class="step">
                <div class="step-number">1</div>
                <p>Browse available food listings provided by donors.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <p>Select desired food items from the listings.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <p>Visit the selected location to pick up the chosen food items.</p>
            </div>
        </div>
    </div>
</div>

<!-- Sign Up Section -->
<div class="sign-up">
    <p class="join-us">Want to join us?</p>
    <div class="sign-up-options">
        <a href="register_form.php" class="sign-up-donor">Sign up as a donor</a>
        <a href="register_form.php" class="sign-up-user">Sign up as a user</a>
    </div>
</div>

<!-- Benefits Section -->
<div class="benefits">
    <h2>Benefits of Using Our Service</h2>
    <div class="benefits-grid">
        <!-- For Donors -->
        <div class="benefit">
            <img src="give.png" alt="Donor Benefit Icon">
            <h3>For Donors</h3>
            <p><strong>Save Lives by Donating Through Our Platform</strong></p>
            <ul>
                <li>Reduce food waste and help the environment</li>
                <li>Contribute to your community by providing food to those in need</li>
                <li>Receive recognition and goodwill from the community</li>
            </ul>
        </div>
        <!-- For Users -->
        <div class="benefit">
            <img src="take.webp" alt="User Benefit Icon">
            <h3>For Users</h3>
            <p><strong>Access Free or Affordable Food Options</strong></p>
            <ul>
                <li>Access free or affordable food options</li>
                <li>Enjoy fresh and nutritious meals donated by generous individuals and organizations</li>
                <li>Help reduce food insecurity in your community</li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
