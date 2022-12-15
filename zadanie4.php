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
$x = 4;
$y = 6;
$z = 8;
 
function fmin($x, $y){
    return ($x <= $y) ? $x : $y;    
}
 
function fmax($x, $y){
    return ($x >= $y) ? $x : $y;    
}
 
echo $u = fmin($x, fmax($y, $z));
?>
</body>
</html>