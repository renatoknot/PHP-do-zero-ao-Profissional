<?
    $nomes = file('nomes.txt');
    $sorteado = array_rand($nomes);
?>
<h2>Sorteio</h2>

<?="Nome sorteado: ".$nomes[$sorteado]?>