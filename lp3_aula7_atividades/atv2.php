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
$consumo = floatval($_POST['txtconsumo']);
$instalacao = $_POST['instalacao'];
$total = 0;

if ($instalacao == "residencial") {
    $total = ($consumo <= 500) ? $consumo * 0.40 : $consumo * 0.65;
} elseif ($instalacao == "comercial") {
    $total = ($consumo <= 1000) ? $consumo * 0.55 : $consumo * 0.60;
} elseif ($instalacao == "industrial") {
    $total = ($consumo <= 5000) ? $consumo * 0.55 : $consumo * 0.60;
}


echo "Valor total da conta: R$ " . number_format($total, 2, ',', '.');
?>