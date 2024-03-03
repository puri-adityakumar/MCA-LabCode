<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <h1>Even or Odd</h1>
    <form action="assgn-1d.php" method="post">
        Number: <input type="text" name="number" >
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
        if($_POST){

            $num = $_POST["number"];
            if($num % 2 == 0) {
                echo "The number $num is even";
            }else {
                echo "The number $num is odd";
            }
        } else{
            echo "Enter a number";
        }
    ?>
</body>
</html>