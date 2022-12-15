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
$day = rand(1, 31);
$monthDecade = null;
if ($day > 0 && $day <= 10) {
    $monthDecade = 'Первая декада месяца';
} elseif ($day > 10 && $day <= 20) {
    $monthDecade = 'Вторая декада месяца';
} else {
    $monthDecade = 'Третья декада месяца';
}

echo $monthDecade;
?>
</body>
</html>