<!-- Write PHP program to display current date and display using getdate() function. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 5 : B </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+20+Charted&display=swap" rel="stylesheet">
    <style>
        .ques {
            margin : 10px;
            padding : 10px;
            border : 1px solid black;
            border-radius: 1rem;
            align-content: center;
            font-style: oblique;
            background-color: #EEEEEE;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .ques h1 {
            text-align: center;
            font-family: "Jersey 20 Charted", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .main {
            /* center the div */
            margin : 2vh;
            padding : 100px 25px;
            border : 5px solid black;
            border-radius: 1rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            /* align-content: center;  */
            text-align: center;
            line-height: 90px;
            align-items: center;
            justify-content: center;
        }
        .main table {
            margin: 0 auto; /* center the table horizontally */
            border-collapse: collapse; /* remove extra spacing between cells */
        }
    </style>
</head>
<body>
    <div class="ques">
        <h1>Assingment 5 : B</h1>
        <h3>Write PHP program to display current date and display using getdate() function.</h3>
    </div>
    <div class="main">
        <table border="1" cellpadding="10" cellspacing="10">
            <tr>
                <th>Current Dir</th>
                <th>Server Name</th>
                <th>HTTP HOST</th>
                <th>Script Name</th>
            </tr>
            <tr>
                <?php 
                    echo "<td>" .$_SERVER['PHP_SELF'] ."</td>";
                    echo "<td>" .$_SERVER['SERVER_NAME'] ."</td>";
                    echo "<td>" .$_SERVER['HTTP_HOST'] ."</td>";
                    echo "<td>".$_SERVER['SCRIPT_NAME']."</td>";
                ?>
            </tr>
        </table>
    </div>
    
</body>
</html>
