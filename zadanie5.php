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
    $a = 101;
    echo "Число = "."$a"."<br>";
    if ($a%2 ==0 and $a%10==0)
        echo "Число четное и кратно 10"."<br>";
        else {
            echo "Число не четное и не кратно 10"."<br>";
        }
    ?>
</body>
</html>