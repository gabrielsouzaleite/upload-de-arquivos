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
 /*
 Crie uma pasta chamada arquivos dentro de upload, lá vai ser onde os seus arquivos vão ser enviados.
 Caso queira colocar um outro nome de pasta basta trocar o valor do $dir para o nome da pasta correta
 */
$dir = "arquivos/";
$file = $_FILES["arquivo"];

if (move_uploaded_file($file["tmp_name"], "$dir/" . $file["name"])) {
    echo "Arquivo enviado com sucesso";
} else {
    echo "Erro, o arquivo n&atilde;o pode ser enviado.";
}

?>
