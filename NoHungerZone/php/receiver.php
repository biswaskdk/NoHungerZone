
<!DOCTYPE html>
<html>
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <title>EZY Reservation</title>
<style>
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-family: "Pacifico", sans-serif; 
        }

        .navbar a:hover {
            text-decoration: none;
        }

        body {
            background-color:#ffefd5;
            margin: 0;
            padding: 0;
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

        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .column {
            float: left;
            width: 30%;
            padding: 5px;
            box-sizing: border-box;
        }

        .image-container {
            position: relative;
            width: 100%;
            padding-top: 75%;
            overflow: hidden;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }

        .image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-info {
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            overflow: hidden;
        }

        .food-description {
            background-color: gray;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .people-info {
            background-color: #ddd;
            padding: 10px;
            border-radius: 5px;
        }

        .info-box p {
            margin: 5px 0;
            font-size: 18px;
        }
    
             .reserve-button {
              padding: 8px 16px; /* Adjust padding to make the button slightly bigger */
              font-size: 18px; /* Adjust font size to make the button text slightly bigger */
              background-color: #FFA500; /* Yellow-orange color */
              color: white; /* Text color */
              border: none; /* Remove button border */
              border-radius: 5px; /* Apply border radius for rounded corners */
              cursor: pointer; /* Add cursor pointer on hover */
          }

          .delete-button:hover {
              background-color: #FF8C00; /* Darker shade of yellow-orange on hover */
          }

</style>

</head>
<body>
  <header>
     
        <nav class="navbar">
            <a href="Home.php">Food For Everyone</a>
            <a href="Home.php">Home</a>
            <a href="logout.php">Logout</a>
            
            
        </nav>

   </header>


   <div class="row">
    <?php
    // Read image information from the text file and display along with description and available food
    $image_info_file = "image_info.txt";
    if(file_exists($image_info_file)) {
        $image_info_array = file($image_info_file, FILE_IGNORE_NEW_LINES);
        foreach($image_info_array as $index => $image_info) {
            $info = explode("|", $image_info);
            $image_path = $info[0];
            $food_for_people = $info[1];
            $food_description = $info[2];

            echo '<div class="column">';
            echo '<div class="image-container">';
            echo '<img src="' . $image_path . '" alt="Uploaded Image">';
            echo '</div>';
            echo '<div class="image-info">';
            // Food description box
            echo '<div class="food-description info-box">';
            echo '<p>Description of food Location:</p>';
            echo '<p>' . $food_description . '</p>';
            echo '</div>';
            // People info box
            echo '<div class="people-info info-box">';
            echo '<p>Available food for number of people:</p>';
            echo '<p>' . $food_for_people . '</p>';
            echo '</div>';
            // Make food reservation button
            echo '<form method="post" action="reserve_food.php">';
            echo '<input type="hidden" name="reserve_index" value="' . $index . '">';
            echo '<button type="submit" name="reserve_food" class="reserve-button">Make Food Reservation</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';




        }
    }
    ?>
</div>
  </body>
</html>

