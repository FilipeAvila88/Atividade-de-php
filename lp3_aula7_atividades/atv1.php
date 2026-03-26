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

$frequencia = floatval($_POST["txtfrequencia"]);
$nota1 = floatval($_POST["txtnota1"]);
$nota2 = floatval($_POST["txtnota2"]);
$nota3 = floatval($_POST["txtnota3"]);

$media = ($nota1 + $nota2 + $nota3) / 3;

if ($frequencia < 75) {
    $situacao = "Reprovado por Faltas";
} 
else if ($media >= 7) {
    $situacao = "Aprovado";
} 
else if ($media >= 4 && $media <= 6.9) {
    $situacao = "Recuperação";
} 
else {
    $situacao = "Reprovado por Nota";
}

echo "Frequência: " . $frequencia . "%<br>";
echo "Média: " . number_format($media,2) . "<br>";
echo "Situação: " . $situacao;

?>