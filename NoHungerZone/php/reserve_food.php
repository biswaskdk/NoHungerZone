<?php
// Check if the reserve_food button is clicked
if(isset($_POST['reserve_food'])) {
    // Retrieve the index of the clicked item
    $reserve_index = $_POST['reserve_index'];

    // Retrieve the information of the clicked item based on the index
    $image_info_file = "image_info.txt";
    if(file_exists($image_info_file)) {
        $image_info_array = file($image_info_file, FILE_IGNORE_NEW_LINES);
        if(isset($image_info_array[$reserve_index])) {
            $info = explode("|", $image_info_array[$reserve_index]);
            $image_path = $info[0];
            $food_description = isset($info[1]) ? $info[1] : ''; // Check if index 1 exists
            $food_for_people = isset($info[2]) ? $info[2] : ''; // Check if index 2 exists
            
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Food For Everyone</title>
    <style>
        /* Your CSS styles */
        .navbar {
            background-color: #708090;
            border-radius: 0px; /* Adjust border radius as desired */
            color: #f0ffff;
            padding: 20px 0; /* Adjust vertical padding */
            font-size: 20px; /* Adjust font size */
            text-align: center; /* Center align text */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); /* Add a subtle shadow */
            width: 100%; /* Make the navbar stretch to both ends */
            margin: 0; /* Remove any default margin */
        }

        .navbar a {
            color: #f0ffff;
            text-decoration: none; /* Remove underline */
            margin: 0 20px; /* Adjust horizontal spacing between navbar links */
            font-family: "Pacifico", sans-serif; /* Use fancy font */
        }

        .navbar a:hover {
            text-decoration: none; /* Remove underline on hover */
        }

        .navbar ul {
            list-style-type: none; /* Remove bullet points */
            padding: 0;
            margin: 0; /* Remove default margin */
        }

        .navbar li {
            display: inline-block; /* Display navbar items inline */
        }

        body {
            background-color: #ffefd5; /* Purple background color */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        .container {
            width: 95%; /* Set container width to 70% of the screen */
            text-align: center; /* Center content inside the container */
            margin-top: 20px; /* Add margin at the top */
        }

        .container img {
            max-width: 100%; /* Make the image responsive */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Center the image horizontally */
            margin: 0 auto; /* Center the image horizontally */
            margin-bottom: 20px; /* Add some space below the image */
            max-height: 300px; /* Set maximum height for the image */
        }

        .container p {
            font-size: 28px; /* Adjust font size */
            margin-bottom: 10px; /* Add some space below each paragraph */
        }
        
        .reservation-form {
            font-size: 28px;
            margin-top: 30px; /* Add some space above the form */
            text-align: center; /* Center align the form */
        }

        .reservation-form label {
            display: block; /* Display labels as block elements */
            margin-bottom: 20px; /* Add space below labels */
        }

        .reservation-form input[type="number"] {
            width: 50%; /* Set input width to 100% */
            padding: 20px; /* Add padding to input */
            margin-bottom: 15px; /* Add space below input */
            box-sizing: border-box; /* Include padding in input width */
            border-radius: 10px;
        }

        .reservation-form button {
            padding: 20px 20px; /* Add padding to button */
            background-color: black; /* Green background color */
            color: white; /* White text color */
            border: none; /* Remove border */
            border-radius: 10px; /* Add border radius */
            cursor: pointer; /* Add pointer cursor on hover */
            font-size: 18px;
        }

        .description-box {
            background-color: black; /* Light gray background color */
            color: white;
            padding: 10px; /* Add padding */
            border-radius: 5px; /* Add border radius */
            margin-bottom: 5px; /* Add margin at the bottom */
            width: 104%;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="Home.php">Food For Everyone</a>
            <a href="Home.php">Home</a>
            <a href="logout.php">Logout</a>
            <a href="receiver.php">User Page</a>
        </nav>
    </header>
    <!-- Display the reserved food information -->
    <div class="container">
        <img src="<?php echo isset($image_path) ? $image_path : ''; ?>" alt="Reserved Image">
        <div class="description-box">
            <p>Description of food Location: <?php echo isset($food_description) ? $food_description : ''; ?></p>
        </div>
        <div class="description-box">
            <p>Available food for number of people: <?php echo isset($food_for_people) ? $food_for_people : ''; ?></p>
        </div>
        <!-- Add more information if needed -->
        <form class="reservation-form" method="post" action="orderplaced.php">
            <label for="num_people">Number of People:</label>
            <input type="number" id="num_people" name="num_people" placeholder="Enter number of people" required>
            <button type="submit"  name="submit_reservation">Submit Reservation</button>
        </form>
    </div>
</body>
</html>
