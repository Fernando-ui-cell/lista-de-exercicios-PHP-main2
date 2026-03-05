<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$numeros = [10, 50, 30];
rsort($numeros); // Ordena o array em ordem decrescente
echo "Números em ordem decrescente: " . implode(", ", $numeros);
?>
</body>
</html>