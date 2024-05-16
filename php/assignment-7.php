<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Assignment 7</title>
</head>
<body>
    <?php
    $countries = array("Chile", "Colombia", "India", "India", "Italy", "Chile", "Austria", "New Zealand", "United States");
    $array = array("apple", "orange", "banana", "kiwi", "lemon");
   ?>
    <div class="container p-3">
        <div class="row p-1 justify-content-md-center">
            Php - Array Key Operation
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form action="" method="post">
                    <div class="p-1">
                        Array Key operation : <br>
                        Find key : <input type="text" name="serach" id="find">
                    </div>
                    <div class="p-1">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <?php
            echo "Array List <br>";
            print_r($array);
           ?>
            <br>
            <?php
            if ($_POST) {
                $search = $_POST['serach'];
                print_r(array_keys($array, $search));
            }
           ?>
        </div>
    </div>
</body>
</html>