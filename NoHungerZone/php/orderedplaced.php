<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="orderplaced.css"> 
<style type="#">
        
            {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f8f8f8;
            }

            .loading-animation {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .loading-icon {
                width: 50px; /* Adjust size as needed */
                height: 50px; /* Adjust size as needed */
            }

            .confirmation-message {
                text-align: center;
                padding: 50px;
            }

            .tick-icon {
                width: 100px; /* Adjust size as needed */
                height: 100px; /* Adjust size as needed */
                margin-bottom: 20px;
            }

            h1 {
                font-size: 2em;
                margin-bottom: 10px;
                color: #333;
            }

            p {
                font-size: 1.2em;
                margin-bottom: 20px;
                color: #666;
            }

</style>
</head>
<body>

    <div class="loading-animation">
        <!-- Insert your loading animation here -->
        <!-- You can use GIF, CSS animation, or any other loading animation -->
        <!-- Example: -->
        <img src="loading.gif" alt="Loading..." class="loading-icon">
    </div>

    <div class="confirmation-message">
        <img src="tick.png" alt="Tick mark" class="tick-icon">
        <h1>Thank You For Connecting With Us</h1>
        <p>Your order has been placed successfully.</p>
        <!-- You can add additional text here for both donors and users -->
        <!-- Example: -->
        <p>Thank you for your support!</p>
    </div>

</body>
</html>
