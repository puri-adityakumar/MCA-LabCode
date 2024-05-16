<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Assignment 2: B</title>
</head>
<body>
    <div class="container p-3">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form action="assignment-2b.php" method="post">
                    <div class="form-group mb-3">
                        <label for="number1" class="form-label">Enter Number:</label>
                        <input type="text" name="number1" id="number1" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php
                    if ($_POST) {
                        $number1 = $_POST["number1"];

                        if (!empty($number1)) {
                            echo "<h4 class='mt-4'>Multiplication Table of $number1</h4>";
                            for ($i = 1; $i < 11; $i++) {
                                $mul = $i * $number1;
                                echo "<p class='mt-2'>$i X $number1 = $mul</p>";
                            }
                        } else {
                            echo "<p class='mt-4'>Please enter a number</p>";
                        }
                    }
              ?>
            </div>
        </div>
    </div>
</body>
</html>