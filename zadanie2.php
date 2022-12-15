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
    $month = (rand(1, 12)) % 12;
    $season = null;
    
    if ($month >= 0 && $month <= 2) {
        $season = 'Зима';
    } elseif ($month >= 3 && $month <= 5) {
        $season = 'Весна';
    } elseif ($month >= 6 && $month <= 8) {
        $season = 'Лето';
    } else {
        $season = 'Осень';
    }
    
    echo $season;
    ?>
</body>
</html>