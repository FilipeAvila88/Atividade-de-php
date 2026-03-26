<?php
$nome = $_POST['txtfrequencia'];
$adicionais = $_POST['adicionais'];

$total = 20; 

for ($adicionais as $item) {
    if ($item == "bacon") $total += 3;
    if ($item == "Cheddar Cremoso") $total += 2.5;
    if ($item == "Cebola Caramelizada") $total += 2;
    if ($item == "Hambúrguer Extra") $total += 5;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Resumo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card p-3">
        <h3>Resumo do Pedido</h3>

        <p><strong>Nome:</strong> <?php echo $nome; ?></p>

        <p><strong>Adicionais:</strong></p>
        <ul>
            <?php
            if ($adicionais) {
                foreach ($adicionais as $item) {
                    echo "<li>$item</li>";
                }
            } else {
                echo "<li>Nenhum</li>";
            }
            ?>
        </ul>

        <p><strong>Total:</strong> R$ <?php echo number_format($total, 2, ',', '.'); ?></p>
    </div>
</div>

</body>
</html>