<!-- Write a php program to check whether given number is String palindrome or not. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5 : A </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20+Charted&display=swap" rel="stylesheet">
    <style>
        .ques {
            margin : 10px;
            padding : 10px;
            border : 1px solid black;
            border-radius: 1rem;
            align-content: center;
            font-style: oblique;
            background-color: #EEEEEE;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .ques h1 {
            text-align: center;
            font-family: "Jersey 20 Charted", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .main {
            /* center the div */
            margin : 10vh;
            padding : 100px 25px;
            border : 5px solid black;
            border-radius: 1rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
            
        }
        .phpp {
            margin-top: 15px;
            padding: 5px;
            border-radius: 0.75rem;
            text-align: center;

        }
    </style>
</head>
<body>
    <div class="ques">
        <h1>Assingment 5 : A</h1>
        <h3>Write a php program to check whether given number is String palindrome or not.</h3>
    </div>
    <div class="main">
        <form method="post">
            Enter a Number : <input type="text" name="num" id="num" required>
            <input type="submit" name="submit" value="Check">
        </form>
        <div class="phpp">
            <!-- PHP code -->
            <?php
                if ($_POST) 
                {
                    $num = $_POST['num'];
                    $reverse = strrev($num);

                    if ($num == $reverse){
                        // echo "The number ( $num ) is a palindrome";
                        echo "<p style='color: green;'>The number ( $num ) is a palindrome</p>";
                    }
                    else{
                        echo "<p style='color: red;'>The number ( $num ) is not a palindrome</p>";
                    }
                }
            ?>
        </div>
    </div>
    
</body>
</html>
