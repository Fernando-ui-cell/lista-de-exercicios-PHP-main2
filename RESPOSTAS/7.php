<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$numero = 5;
$fatorial = 1;
for ($i = $numero; $i > 1; $i--) {
    $fatorial *= $i;
}
echo "O fatorial de $numero é: $fatorial";
?>
</body>
</html>