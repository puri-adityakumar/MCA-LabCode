<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Assignment 3: B </title>
</head>
<body>
    <div class="container p-3">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="fnumber" class="form-label">Enter First Input:</label>
                        <input type="number" id="fnumber" name="fnumber" required class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="snumber" class="form-label">Enter Second Input:</label>
                        <input type="number" id="snumber" name="snumber" required class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="choice" class="form-label">Enter Your Choice:</label>
                        <select id="choice" name="choice" required class="form-select">
                            <option value="" selected>--Choice--</option>
                            <option value="ADD">ADDITION</option>
                            <option value="SUB">SUBTRACTION</option>
                            <option value="MUL">MULTIPLICATION</option>
                            <option value="DIV">DIVISION</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <?php
            if (isset($_POST['submit'])) {
                $fnumber = $_POST['fnumber'];
                $snumber = $_POST['snumber'];
                $choice = $_POST['choice'];
                switch ($choice) {
                    case 'ADD':
                        $res = $fnumber + $snumber;
                        $msg = "Addition of $fnumber and $snumber";
                        break;
                    case 'SUB':
                        $res = $fnumber - $snumber;
                        $msg = "Subtraction of $fnumber and $snumber";
                        break;
                    case 'MUL':
                        $res = $fnumber * $snumber;
                        $msg = "Multiplication of $fnumber and $snumber";
                        break;
                    case 'DIV':
                        if ($snumber!= 0) {
                            $res = $fnumber / $snumber;
                            $msg = "Division of $fnumber and $snumber";
                        } else {
                            $msg = "Error: Division by zero is not allowed";
                            $res = "";
                        }
                        break;
                }
            }
       ?>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <?php if (isset($msg)) echo "<p class='mt-4'>$msg is <b>$res</b></p>";?>
            </div>
        </div>
    </div>
</body>
</html>