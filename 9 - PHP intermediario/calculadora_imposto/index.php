<form method="POST">
    <h1>Calculadora de Imposto</h1><br><br>
    
    Valor do Produto : <input type="number" name="valproduto" id=""><br><br>
    
    Taxa de imposto (em %): <input type="number" name="taxaimposto" id=""><br><br>
    
    <input type="submit" value="Calcular"><br><br>
</form>

<?php
    if(!empty($_POST['valproduto']) && !empty($_POST['taxaimposto'])) {
        $valproduto = $_POST['valproduto'];
        $taxaimposto = $_POST['taxaimposto'];

        $totalimposto = ($valproduto/100) * $taxaimposto;
        $produto = $valproduto - $totalimposto;

        echo "Valor do produto: R$".$valproduto."<br>";
        echo "Taxa de imposto: ".$taxaimposto."%<br>";
        echo "<hr>";

        echo "Imposto: R$".$totalimposto."<br>";
        echo "Produto: R$".$produto."<br>";
    }


?>