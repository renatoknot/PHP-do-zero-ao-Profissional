<?php
    $arquivo = "imagem.jpg";

    $width = 200;
    $height = 200;

    list($largura_original,$altura_original) = getimagesize($arquivo);

    $ratio = $largura_original / $altura_original;

    if($width / $height > $ratio) {
        $width = $height * $ratio;
    } else {
        $height = $width / $ratio;
    }

    echo "Largura original: ${largura_original} / Altura: ${altura_original}." ."<br>";
    echo "Largura: ${width} / Altura: ${height}.<br><br>";

    $imagem_final = imagecreatetruecolor($width,$height);
    $imagem_original = imagecreatefromjpeg($arquivo);

    imagecopyresampled($imagem_final, $imagem_original, 
    0, 0, 0, 0, $width, $height, $largura_original, $altura_original);

    header("Content-Type: image/jpeg");
    imagejpeg($imagem_final, "mini-imagem.jpg");
?>