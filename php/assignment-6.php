
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Assignment 6</title>
</head>
<body>
    <?php
    $countries = array("Chile", "Colombia", "India", "India", "Italy", "Chile", "Austria", "New Zealand", "United States");
    if ($_POST) {
        // do something
    }
   ?>
    <div class="container p-3">
        <div class="row p-1 justify-content-md-center">Php - Array Operation</div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form action="" method="post">
                    <div class="p-1">
                        Array operation : <br>
                        <input type="radio" name="choice" value="display" onclick="DisableTextBox()">Display Array<br />
                        <input type="radio" name="choice" value="sort" onclick="DisableTextBox()">Sorted Array<br />
                        <input type="radio" name="choice" value="dupli" onclick="DisableTextBox()">Without Duplicate<br />
                        <input type="radio" name="choice" value="pop" onclick="DisableTextBox()">Delete Last<br />
                        <input type="radio" name="choice" value="rev" onclick="DisableTextBox()">Array Reverse<br />
                        <input type="radio" name="choice" value="insert" onclick="DisableTextBox()">Insert Element<br />
                        Value : <input type="text" name="element" id="element" disabled> Position of array : <input type="text" name="position" id="position" disabled> <br>
                        <input type="radio" name="choice" value="find" onclick="DisableTextBox()">Array Find Element : <input type="text" name="serach" id="find" disabled>
                    </div>
                    <div class="p-1">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-md-center">
           <?php echo "Array List <br>";?>
            <?php print_r($countries);?>
            <?php
            if ($_POST) {
                $val = $_POST['choice'];
                switch ($val) {
                    case "display":
                        foreach ($countries as $value) {
                            echo "<br>". $value;
                        }
                        break;
                    case "sort":
                        sort($countries);
                        foreach ($countries as $value) {
                            echo "<br>". $value;
                        }
                        break;
                    case "dupli":
                        $uarray = array_unique($countries);
                        foreach ($uarray as $value) {
                            echo "<br>". $value;
                        }
                        break;
                    case "pop":
                        array_pop($countries);
                        foreach ($countries as $value) {
                            echo "<br>". $value;
                        }
                        break;
                    case "rev":
                        $revarr = array_reverse($countries);
                        foreach ($revarr as $value) {
                            echo "<br>". $value;
                        }
                        break;
                    case "insert":
                        array_splice($countries, $_POST['position'], 0, $_POST['element']);
                        foreach ($countries as $value) {
                            echo "<br>". $value;
                        }
                        break;
                    case "find":
                        if (in_array($_POST['serach'], $countries)) {
                            echo "<br> Find Search element ". $_POST['serach']. " at position ". array_search($_POST['serach'], $countries);
                        } else {
                            echo "<br> Element not Found";
                        }
                        foreach ($countries as $value) {
                            echo "<br>". $value;
                        }
                        break;
                }
            }
           ?>
        </div>
    </div>
    <script type="text/javascript">
        function DisableTextBox() {
            var choice = document.getElementsByName('choice');
            var choice_value;
            for (var i = 0; i < choice.length; i++





            ) {
                if (choice[i].checked) {
                    choice_value = choice[i].value;
                }
            }
if (choice_value == 'insert') {
                document.getElementById('element').disabled = false;
                document.getElementById('position').disabled = false;
                document.getElementById('find').disabled = true;
            } else if (choice_value == 'find') {
                document.getElementById('find').disabled = false;
                document.getElementById('element').disabled = true;
                document.getElementById('position').disabled = true;
            } else {
                document.getElementById('find').disabled = true;
                document.getElementById('element').disabled = true;
                document.getElementById('position').disabled = true;
            }
        }
    </script>
</body>
</html>






 
