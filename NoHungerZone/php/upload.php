<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['upload'])){
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_temp_loc = $_FILES['file']['tmp_name'];
    
    // Check if the directory exists, if not, create it
    $upload_directory = "models/";
    if (!file_exists($upload_directory)) {
        mkdir($upload_directory, 0777, true);
    }
    
    $file_store = $upload_directory . $file_name;
    $food_for_people = $_POST['food_for_people']; // Get number of people
    $food_description = $_POST['food_description']; // Get food description

    // Move the uploaded file to the destination directory
    if(move_uploaded_file($file_temp_loc, $file_store)){
        // Store image information in a text file (you can use a database instead)
        $image_info = $file_store . "|" . $food_for_people . "|" . $food_description . PHP_EOL;
        file_put_contents("image_info.txt", $image_info, FILE_APPEND);

        // Redirect back to admin page after successful upload
        header("Location: admin_donor.php");
        exit();
    } else {
        echo "Failed to upload file.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Upload Food</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('background.jpg'); /* Replace 'background.jpg' with the path to your background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .navbar {
            background-color: #333;
            color: white;
            padding: 10px 20px;
        }
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }
        .form-box {
            background-color: #f2f2f2;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
        }
        h2 {
            text-align: center;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            font-size: 18px;
        }
        input[type="file"],
        input[type="text"],
        textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 18px;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
            font-weight: bold;
            display: block;
            margin: 0 auto;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="admin_donor.php" style="color: white; text-decoration: none;">Back</a>
    </div>
    <div class="container">
        <div class="form-box">
            <h2>Upload Food</h2>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="file">Select Image:</label>
                <input type="file" name="file" id="file">

                <label for="food_for_people">Available food for number of people:</label>
                <input type="text" name="food_for_people" id="food_for_people">

                <label for="food_description">Description of Food Location:</label>
                <textarea name="food_description" id="food_description" rows="5"></textarea>

                <input type="submit" name="upload" value="Upload Image">
            </form>
        </div>
    </div>
</body>
</html>
