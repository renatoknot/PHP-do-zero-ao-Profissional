<?
    require 'config.php';
    require 'classes/carros.class.php';
    require 'classes/reservas.class.php';

    $reservas = new Reservas($pdo);
    $carros = new Carros($pdo);

    if(!empty($_POST['carro'])){
        $carro = addslashes($_POST['carro']);
        $data_inicio = addslashes($_POST['data_inicio']);
        $data_fim = addslashes($_POST['data_fim']);
        $pessoa = addslashes($_POST['pessoa']);

        if($reservas->verificarDisponibilidade($carro, $data_inicio, $data_fim)){
            $reservas->reservar($carro, $data_inicio, $data_fim, $pessoa);
            header("Location: index.php");
            exit;
        } else {
            echo 'Este carro já está reservado neste período';
        }
    }
?>
<h1>Adicionar reserva</h1>

<form action="" method="POST">
    Carro: <br>
    <select name="carro">
        <?
            $lista = $carros->getCarros();

            foreach ($lista as $carro) :
        ?>  <option value="<?=$carro['id'];?>"><?=$carro['nome'];?></option>
        <? endforeach;?>
    </select><br><br>

    Data de inicio: <br>
    <input type="date" name="data_inicio"><br><br>

    Data de fim: <br>
    <input type="date" name="data_fim"><br><br>

    Nome da pessoa: <br>
    <input type="text" name="pessoa"><br><br>

    <input type="submit" value="Reservar">
</form>