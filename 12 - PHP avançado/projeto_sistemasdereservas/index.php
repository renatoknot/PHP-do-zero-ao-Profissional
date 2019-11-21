<?
    require 'config.php';
    require 'classes/carros.class.php';
    require 'classes/reservas.class.php';

    $reservas = new Reservas($pdo);
    $carros = new Carros($pdo);
?>

<h1>Reservas</h1> <br><br>
<a href="reservar.php">Adicionar reserva</a><br><br>
<?
    $lista = $reservas->getReservas();

    foreach($lista as $item){
        $datainicio = date('d/m/Y', strtotime($item['data_inicio']));
        $datafim = date('d/m/Y', strtotime($item['data_fim']));

        echo $item['pessoa']." reservou o carro ".$item['id_carro']." entre ".$datainicio." e ".$datafim."<br>";
    }
?>

<hr>

<? 
    require 'calendario.php';
?>