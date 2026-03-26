<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Sistema de Pedidos com Adicionais</h1>
        <form action="at1.php" method="POST">
<div class="mb-3">
  <label for="Nome:" class="form-label">Seu nome: </label>
  <input type="txt" class="form-control" id="campofrequência" name="txtfrequencia">
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="bacon" id="checkDefault" name="adicionais[]">
  <label class="form-check-label" for="checkDefault">
   Bacon: R$ 3,00
  </label>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Cheddar Cremoso" id="checkDefault" name="adicionais[]">
  <label class="form-check-label" for="checkDefault">
    Cheddar Cremoso: R$ 2,50
  </label>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Cebola Caramelizada" id="checkDefault" name="adicionais[]">
  <label class="form-check-label" for="checkDefault">
    Cebola Caramelizada: R$ 2,00
  </label>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="Hambúrguer Extra" id="checkDefault" name="adicionais[]">
  <label class="form-check-label" for="checkDefault">
    Hambúrguer Extra: R$ 5,00
  </label>
  
</div>
</form>

<div class="container">
    <h2>Gerador de Tabuada</h2>

    <form action="at2.php" method="GET">
        <div class="mb-3">
            <label class="form-label">Digite um número:</label>
            <input type="number" name="numero" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Gerar</button>
    </form>

    
</div>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>