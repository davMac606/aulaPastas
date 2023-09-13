<?php








?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Upload de Arquivos</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">  
        <label for="ra">RA:</label>
        <input type="text" name="ra"><br><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br><br>

        <label for="arquivo">Arquivo:</label>

        <input type="file" name="arquivo"><br><br>

        <input type="submit" value="Enviar">
    </form>



</html>
