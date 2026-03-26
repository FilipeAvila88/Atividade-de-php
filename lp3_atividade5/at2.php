<?php
    if (!isset($_GET['numero'])) {
        echo "<div class='alert alert-info'>Digite um número para ver a tabuada.</div>";
    } else {
        $n = $_GET['numero'];

        echo "<h4>Tabuada do $n</h4>";

        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-hover'>";
        echo "<thead><tr><th>Cálculo</th><th>Resultado</th></tr></thead>";
        echo "<tbody>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $n * $i;
            echo "<tr>";
            echo "<td>$n x $i</td>";
            echo "<td>$resultado</td>";
            echo "</tr>";
        }

        echo "</tbody></table></div>";
    }
    ?>

</div>