<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$segundosTotais = 3735; // Exemplo

$horas = floor($segundosTotais / 3600);
$minutos = floor(($segundosTotais % 3600) / 60);
$segundosRestantes = $segundosTotais % 60;

echo "Duração: {$horas}h {$minutos}m {$segundosRestantes}s";
?>
</body>
</html>