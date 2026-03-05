<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$valor = 7;
echo "Tabuada do $valor:<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "$valor x $i = " . ($valor * $i) . "<br>";
}
?>
</body>
</html>