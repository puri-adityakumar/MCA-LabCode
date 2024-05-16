<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1: C</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1 class="mb-4">Number Swapping!!!</h1>
        <form action="assignment-1c.php" method="post" class="mx-auto" style="max-width: 300px;">
            <div class="form-group">
                <label for="num1" class="sr-only">Num1</label>
                <input type="text" name="num1" id="num1" class="form-control" placeholder="Enter Num1">
            </div>
            <div class="form-group">
                <label for="num2" class="sr-only">Num2</label>
                <input type="text" name="num2" id="num2" class="form-control" placeholder="Enter Num2">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <?php
                if ($_POST) {
                    $a = $_POST["num1"];
                    $b = $_POST["num2"];

                    echo "<p class='mt-4'>Before swapping!</p>";
                    echo "<p class='mt-4'>Number 1 is $a and Number 2 is $b</p>";

                    $temp = $a;
                    $a = $b;
                    $b = $temp;

                    echo "<p class='mt-4'>After swapping!</p>";
                    echo "<p class='mt-4'>Number 1 is $a and Number 2 is $b</p>";
                } else {
                    echo "<p class='mt-4'>Enter the numbers</p>";
                }
           ?>
        </form>
    </div>
</body>
</html>