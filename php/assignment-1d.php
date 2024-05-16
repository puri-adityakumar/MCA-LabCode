<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1: D</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        body {
            /* add some padding to the body to make it look better */
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1 class="mb-4">Even or Odd</h1>
        <form action="assignment-1d.php" method="post" class="mx-auto" style="max-width: 300px;">
            <div class="form-group">
                <label for="number" class="sr-only">Number:</label>
                <input type="text" name="number" class="form-control" placeholder="Enter a number">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
            if($_POST){
                $num = $_POST["number"];
                if($num % 2 == 0) {
                    echo "<p class='mt-4'>The number $num is even</p>";
                }else {
                    echo "<p class='mt-4'>The number $num is odd</p>";
                }
            } else{
                echo "<p class='mt-4'>Enter a number</p>";
            }
       ?>
    </div>
</body>
</html>