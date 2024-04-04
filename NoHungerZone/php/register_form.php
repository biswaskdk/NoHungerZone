<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>

    <!-- External CSS file link -->
    <link rel="stylesheet" href="css/style.css">
   <style>
                           .navbar a {
                              color: white;
                            text-decoration: none;
                                       margin: 0 20px; /* Adjust horizontal spacing between navbar links */
                                       font-family: "Pacifico", sans-serif; 
                              }

                             .navbar a:hover {
                               text-decoration: none;
                                    }

                        body {
                           background-color:#ffefd5; /* Purple background color */
                           margin: 0; /* Remove default margin */
                           padding: 0; /* Remove default padding */
                       }
                        .navbar {
                           background-color: #708090;
                            border-radius: 0px; /* Adjust border radius as desired */
                             color: #f0ffff;
                             padding: 20px 0; /* Adjust vertical padding */
                               font-size: 20px; /* Adjust font size */
                                text-align: center; /* Center align text */
                                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); /* Add a subtle shadow */
                        }

                      .navbar ul {
                   list-style-type: none; /* Remove bullet points */
                   padding: 0;
                          }

                          .navbar li {
                     display: inline-block; /* Display navbar items inline */
                     margin: 0 20px; /* Adjust horizontal spacing between navbar items */
                         }

                            .navbar a {
                                    color: white;
                                    text-decoration: none; /* Remove underline */
                          }

                                           .navbar a:hover {
                                            text-decoration: none; /* Remove underline on hover */
                                      }

    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="Home.php">Home</a></li>
            </ul>
        </nav>

        <div class="form-container">
            <form action="" method="post">
                <h3>Register Now</h3>
                <?php
                // Display error messages if any
                if(isset($error)){
                    foreach($error as $error_msg){
                        echo '<span class="error-msg">'.$error_msg.'</span>';
                    }
                }
                ?>
                <input type="text" name="name" required placeholder="Enter your name">
                <input type="email" name="email" required placeholder="Enter your email">
                <input type="password" name="password" required placeholder="Enter your password">
                <input type="password" name="cpassword" required placeholder="Confirm your password">
                <select name="user_type">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                <input type="submit" name="submit" value="Register Now" class="form-btn">
                <p>Already have an account? <a href="login_form.php">Login Now</a></p>
            </form>
        </div>
    </header>
</body>
</html>
