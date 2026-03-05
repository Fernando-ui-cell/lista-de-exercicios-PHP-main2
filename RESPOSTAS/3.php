<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$ganhoPorHora = 50.00;
$horasTrabalhadas = 160;
$salarioTotal = $ganhoPorHora * $horasTrabalhadas;
echo "Seu salário este mês é: R$ " . number_format($salarioTotal, 2, ',', '.');
?>
</body>
</html>