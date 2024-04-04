<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Food For Everyone</title>
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
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="Home.php">Food For Everyone</a>
            <a href="Home.php">Home</a>
            <a href="logout.php">Logout</a>
            <a href="upload.php">Add Food</a>
            
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
                $image_path = isset($info[0]) ? $info[0] : ''; // Check if index 0 exists
                $food_for_people = isset($info[1]) ? $info[1] : ''; // Check if index 1 exists
                $food_description = isset($info[2]) ? $info[2] : ''; // Check if index 2 exists
        ?>
        <div class="column">
            <div class="image-container">
                <img src="<?php echo $image_path; ?>" alt="Uploaded Image">
            </div>
            <div class="image-info">
                <div class="food-description info-box">
                    <p>Description of food Location:</p>
                    <p><?php echo $food_description; ?></p>
                </div>
                <div class="people-info info-box">
                    <p>Available food for number of people:</p>
                    <p><?php echo $food_for_people; ?></p>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
</body>
</html>
