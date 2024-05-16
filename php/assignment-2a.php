<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Assignment 2: A</title>
</head>
<body>
    <div class="container p-3">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form action="assignment-2a.php" method="post">
                    <div class="form-group mb-3">
                        <label for="number1" class="form-label">Enter 1st Number:</label>
                        <input type="text" name="number1" id="number1" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="number2" class="form-label">Enter 2nd Number:</label>
                        <input type="text" name="number2" id="number2" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="number3" class="form-label">Enter 3rd Number:</label>
                        <input type="text" name="number3" id="number3" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php
                    if ($_POST) {
                        $number1 = $_POST["number1"];
                        $number2 = $_POST["number2"];
                        $number3 = $_POST["number3"];

                        if (!empty($number1) &&!empty($number2) &&!empty($number3)) {
                            echo "<p class='mt-4'>Numbers are $number1, $number2, $number3</p>";

                            $maxNum = max($number1, $number2, $number3);
                            echo "<p class='mt-4'>Maximum number is $maxNum</p>";
                        } else {
                            echo "<p class='mt-4'>Please enter all three numbers</p>";
                        }
                    }
               ?>
            </div>
        </div>
    </div>
</body>
</html>