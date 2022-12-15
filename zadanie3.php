<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $year = 1700;

    if ($year % 400 == 0) {
        echo "$year год - Високосный";
    } else {
        echo "$year год - Не високосный";
    }
    
    ?>
</body>
</html>