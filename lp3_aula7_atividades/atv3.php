<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-body">
<?php
$valor = floatval($_POST['txtvalor']);
$categoria = $_POST['categoria'];

$desconto = 0;
$freteGratis = false;


switch ($categoria) {
    case 'comum':
        if ($valor > 500) {
            $desconto = $valor * 0.05;
        }
        break;
    case 'vip':
        $desconto = $valor * 0.10;
        if ($valor > 1000) {
            $freteGratis = true;
        }
        break;
    case 'premium':
        $desconto = $valor * 0.15;
        $freteGratis = true;
        break;
}

$valorFinal = $valor - $desconto;


echo "<h2>Resumo da Compra</h2>";
echo "Valor original: R$ " . number_format($valor, 2, ',', '.') . "<br>";
echo "Desconto aplicado: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
echo "Valor final: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";

if ($freteGratis) {
    echo "<strong>Frete Grátis!</strong>";
}
?>