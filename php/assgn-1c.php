<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Number Swapping!!!</h1>
    <form action="assgn-1c.php" method="post">
       Num1 <input type="text" name="num1" id=""><br>
       Num2 <input type="text" name="num2" id=""><br>
       <button type="submit" name="submit">submit</button> 

       <?php
            if($_POST){

                $a = $_POST["num1"];
                $b = $_POST["num2"];

                echo "<br> Before swapping! <br>";
                echo "Number 1 is $a and Number 2 is $b <br>";

                $temp = $a;
                $a = $b;
                $b = $temp;

                echo "After swaping! <br> Number 1 is $a and Number 2 is $b ";
            } else
                echo "Enter the numbers";
       ?>
    </form>
</body>
</html>