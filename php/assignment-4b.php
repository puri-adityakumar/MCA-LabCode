<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Assignment 4: B</title>
    <style>
        .main {
            /* center the div */
            margin : 10vh;
            padding : 100px 25px;
            border : 5px solid black;
            border-radius: 1rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>

  <div class="main">
  <div class="container p-3">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form action="assignment-4b.php" method="post">
                    <div class="p-1">
                        Enter Word : <input type="text" name="word">
                    </div>
                    <div class="p-1">
                        <input type="submit" value="Submit">
                    </div>
                </form>
                <?php
                function countVowels($string) {
                    $vowels = array('a', 'e', 'i', 'o', 'u');
                    $len = strlen($string);
                    $num = 0;
                    for ($i = 0; $i < $len; $i++) {
                        if (in_array($string[$i], $vowels)) {
                            echo "$string[$i] - position is $i<br>";
                            $num++;
                        }
                    }
                    return $num;
                }
                if ($_POST) {
                    $word = $_POST["word"];
                    $inputword = strtolower($word);
                    if ($word!= null) {
                        echo "$word - have No. of Vowels are ". countVowels($inputword);
                    }
                }
               ?>
            </div>
        </div>
    </div>
  </div>
    
</body>
</html>