<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Assignment 4: A</title>
</head>
<body>
    <?php
    $inputstring = "the quick brown FOX jumps over the lazy DOG";
   ?>
    <div class="container p-3">
        <div class="row p-1 justify-content-md-center">
            Php - String Operation
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form action="" method="post">
                    <div class="p-1">
                        String operation : <br>
                        <input type="radio" name="choice" value="upper" onclick="DisableTextBox()">Lowercase to uppercase<br />
                        <input type="radio" name="choice" value="lower" onclick="DisableTextBox()">Uppercase to lowercase<br />
                        <input type="radio" name="choice" value="fupper" onclick="DisableTextBox()">First character Uppercase<br />
                        <input type="radio" name="choice" value="fwordupper" onclick="DisableTextBox()">First character of all the words uppercase<br />
                        <input type="radio" name="choice" value="lastposition" onclick="DisableTextBox()">Get the last
                        <input type="text" name="lposition" id="lposition" size="3" disabled> characters of string<br />
                        <br>
                        <input type="radio" name="choice" value="replace" onclick="DisableTextBox()">Replace the first
                        <input type="text" name="foundelement" id="foundelement" placeholder="find Word" disabled> following string with <input type="text" name="replaceelement" id="replaceelement" placeholder="replace word" disabled><br>
                        <input type="radio" name="choice" value="secondword" onclick="DisableTextBox()">Second word of a sentence<br />
                        <input type="radio" name="choice" value="insert" onclick="DisableTextBox()">Insert a
                        string <br>
                        Value : <input type="text" name="element" id="element" disabled> Position of String : <input type="text" name="position" id="position" disabled> <br>
                    </div>
                    <div class="p-1">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <?php echo "Input String <br>";?>
            <?php print_r($inputstring);?>
            <br>
            <?php echo "Output String <br>";?>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $val = $_POST["choice"];
                switch ($val) {
                    case "upper":
                        echo strtoupper($inputstring);
                        break;
                    case "lower":
                        echo strtolower($inputstring);
                        break;
                    case "fupper":
                        echo ucfirst($inputstring);
                        break;
                    case "fwordupper":
                        echo ucwords($inputstring);
                        break;
                    case "lastposition":
                        $lposition = $_POST["lposition"];
                        echo substr($inputstring, -$lposition);
                        break;
                    case "replace":
                        $foundelement = $_POST["foundelement"];
                        $replaceelement = $_POST["replaceelement"];
                        echo str_replace($foundelement, $replaceelement, $inputstring);
                        break;
                    case "secondword":
                        echo "Second word is: ";
                        $dataarray = explode(" ", $inputstring);
                        echo $dataarray[1];
                        break;
                    case "insert":
                        $element = $_POST["element"];
                        $position = $_POST["position"];
                        $inputstring = substr_replace($inputstring, " " . $element, $position, 0);
                        echo $inputstring;
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
            for (var i = 0; i < choice.length; i++) {
                if (choice[i].checked) {
                    choice_value = choice[i].value;
                }
            }
            if (choice_value == 'lastposition') {
                document.getElementById('lposition').disabled = false;
            } else {
                document.getElementById('lposition').disabled = true;
            }
            if (choice_value == 'replace') {
                document.getElementById('foundelement').disabled = false;
                document.getElementById('replaceelement').disabled = false;
            } else {
                document.getElementById('foundelement').disabled = true;
                document.getElementById('replaceelement').disabled = true;
            }
            if (choice_value == 'insert') {
                document.getElementById('element').disabled = false;
                document.getElementById('position').disabled = false;
            } else {
                document.getElementById('element').disabled = true;
                document.getElementById('position').disabled = true;
            }
        }
    </script>
</body>
</html>