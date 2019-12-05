<?
    // $p = $_POST;
    // $p['qtd_nome'] = strlen($_POST['nome']);

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $array = array('status' => 'Não ok');

    if($nome ==='Bonieky' && $senha === '123'){//login basicao
        $array['status'] = 'ok';
    }
    echo json_encode($array);