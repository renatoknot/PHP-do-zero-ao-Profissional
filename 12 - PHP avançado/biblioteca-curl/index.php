<?php
    $ch = curl_init();
    curl_setopt($ch ,CURLOPT_URL, "http://www.checkitout.com.br/wb/pingpong");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "nome=Bonieky&idade=90&sexo=masculino");

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $resposta = curl_exec($ch); //executa a requisição
    curl_close($ch); // altamente recomendado fechar a conexão

    print_r($resposta);
?>