<html>

<head>
    <title>Envio de Arquivo</title>
</head>

<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        selecione o arquivo: <input type="file" name="arquivo">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>


<?php

$dir = "arquivos/";
$file = $_FILES["arquivo"];

if (move_uploaded_file($file["tmp_name"], "$dir/" . $file["name"])) {
    echo "Arquivo enviado com sucesso";
} else {
    echo "Erro, o arquivo n&atilde;o pode ser enviado.";
}

?>