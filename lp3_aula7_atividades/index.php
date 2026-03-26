<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
<div class="container">
        <div class="row">
            <h1>Sistema de Aprovação Escolar</h1>
            <form action="atv1.php" method="POST">
<div class="mb-3">
  <label for="Frequência" class="form-label">Frequência em porcentagem: </label>
  <input type="number" class="form-control" id="campofrequência" name="txtfrequencia">
</div>
<div class="mb-3">
  <label for="Nota 1" class="form-label">Nota 1:</label>
  <input type="number" class="form-control" id="camponota1" name="txtnota1">
</div>              
<div class="mb-3">
  <label for="Nota 2" class="form-label">Nota 2: </label>
  <input type="number" class="form-control" id="camponota2" name="txtnota2">
</div>
<div class="mb-3">
  <label for="Nota 3" class="form-label">Nota 3: </label>
  <input type="number" class="form-control" id="camponota3" name="txtnota3">
</div>
<button type="submit" class="btn btn-sucess">Enviar
</button>
<button type="reset" class="btn btn-warning">Limpar campos</button>
            </form>
    <div class="row">
        <h1>Calculadora de Tarifas de Energia Elétrica</h1>
        <form action="atv2.php" method="POST">
            <div class="mb-3">
                <label for="consumo" class="form-label">Consumo de energia (kWh):</label>
                <input type="number" class="form-control" id="consumo" name="txtconsumo">
            </div>

            <div class="mb-3">
                <label for="instalacao" class="form-label">Tipo de instalação:</label>
                <select class="form-select" id="instalacao" name="instalacao" required>
                    <option value="" selected disabled>Selecione</option>
                    <option value="residencial">Residencial</option>
                    <option value="comercial">Comercial</option>
                    <option value="industrial">Industrial</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Calcular</button>
            <button type="reset" class="btn btn-warning">Limpar campos</button>
        </form>
        <div class="row">
        <h1>Sistema de Descontos para E-commerce</h1>
        <form action="atv3.php" method="POST">
            <div class="mb-3">
                <label for="valor" class="form-label">Valor total da compra (R$):</label>
                <input type="number" class="form-control" id="valor" name="txtvalor" min="0" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria do cliente:</label>
                <select class="form-select" id="categoria" name="categoria" required>
                    <option value="" selected disabled>Selecione</option>
                    <option value="comum">Cliente Comum</option>
                    <option value="vip">Cliente VIP</option>
                    <option value="premium">Cliente Premium</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Calcular</button>
            <button type="reset" class="btn btn-warning">Limpar campos</button>
        </form>
    </div>
</div>
    </div>
</div>

        </div>
    </div>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>