<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2: C</title>
</head>
<body>
    <table width="400" cellspacing="0" cellpadding="0" border="1">
        <?php
            for ($row = 1; $row <= 8; $row++) {
                echo "<tr>";
                for ($column = 1; $column <= 8; $column++) {
                    $total = $row + $column;
                    $bgColor = $total % 2 === 0 ? "#FFFFFF" : "#000000";
                    echo "<td height='35' width='30' bgcolor='$bgColor'></td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>