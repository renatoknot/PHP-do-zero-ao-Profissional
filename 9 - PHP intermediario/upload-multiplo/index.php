<pre>
    <?php

    if(isset($_FILES['arquivo'])) {
        if (count($_FILES['arquivo']['tmp_name'])>0) {     //verifica se ao menos 1 arquivo foi enviado
            $totalarquivos = count($_FILES['arquivo']['tmp_name']);  // Irá contar o total de arquivos enviados

            for ($q=0; $q < $totalarquivos; $q++) {
                $nomedoarquivo =md5($_FILES['arquivo']['name'][$q].time().rand(0,999)).'.jpg';
                move_uploaded_file($_FILES['arquivo']['tmp_name'][$q],'arquivos/'.$nomedoarquivo);
            }
        }
        
    }

    ?>
</pre>



<form method="POST" enctype="multipart/form-data">
    Arquivo: <br>
    <input type="file" name="arquivo[]" multiple><br><br>
    <input type="submit" value="Enviar Arquivos">
</form>