<?php
    $imagem = "imagem.jpg";

    list($largura_original,$altura_original) = getimagesize($imagem);

    $image_final = imagecreatetruecolor($largura_original,$altura_original);

    $imagem_original = imagecreatefromjpeg("imagem.jpg");
    $imagem_mini = imagecreatefromjpeg("mini-imagem.jpg");

    imagecopy($image_final,$imagem_original, 0, 0, 0, 0,$largura_original, $altura_original);

    header("Content-Type: imagem/jpg");
    imagejpeg($imagem_final, null);
?>