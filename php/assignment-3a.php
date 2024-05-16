<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Assignment 3: A</title>
</head>
<body>
    <div class="container p-3">
        <div class="row p-1 justify-content-md-center">
            <h2>Php - Calculate Electricity Bill</h2>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="number" class="form-label">Enter Units :</label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="Please enter no. of Units">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <?php
            if ($_POST) {
                $number = $_POST["number"];
                if (!empty($number)) {
                    $result = calculate_bill($number);
                    $result_str = "Total amount of $number units is: $". number_format($result, 2);
                }
            }
            function calculate_bill($units) {
                $unit_cost_first = 3.50;
                $unit_cost_second = 4.00;
                $unit_cost_third = 5.20;
                $unit_cost_fourth = 6.50;
                if ($units <= 50) {
                    $bill = $units * $unit_cost_first;
                } elseif ($units > 50 && $units <= 100) {
                    $temp = 50 * $unit_cost_first;
                    $remaining_units = $units - 50;
                    $bill = $temp + ($remaining_units * $unit_cost_second);
                } elseif ($units > 100 && $units <= 200) {
                    $temp = (50 * 3.5) + (100 * $unit_cost_second);
                    $remaining_units = $units - 150;
                    $bill = $temp + ($remaining_units * $unit_cost_third);
                } else {
                    $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
                    $remaining_units = $units - 250;
                    $bill = $temp + ($remaining_units * $unit_cost_fourth);
                }
                return $bill;
            }
       ?>
        <div class="row justify-content-md-center">
            <?php if (isset($result_str)) echo "<p class='mt-4'>$result_str</p>";?>
        </div>
    </div>
</body>
</html>