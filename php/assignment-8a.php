<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Form</title>
    <style>
    .main {
            /* center the div */
            margin : 10vh;
            padding : 100px 25px;
            border : 5px solid black;
            border-radius: 1rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
    }
    </style>
</head>
<body>
    <div class="main">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'GET'):?>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" required placeholder="Enter your name" />
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" required placeholder="Enter your email" />
                </div>
                <button type="submit">Subscribe</button>
            </form>
        <?php else:?>
            <?php
            // Validate and sanitize input data
            if (isset($_POST['name'], $_POST['email'])) {
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

                // Validate email address
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo 'Invalid email address.';
                    exit;
                }

                // Process the subscription
                echo "Thanks $name for your subscription.<br>";
                echo "Please confirm it in your inbox of the email $email.";
            } else {
                echo 'You need to provide your name and email address.';
            }
           ?>
        <?php endif;?>
        </div>
</body>
</html>