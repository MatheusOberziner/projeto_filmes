<?php
    include "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes</title>
</head>
<body>
    <div>
        <h1>Lista de Filmes</h1>
        <?php
            $sql = "SELECT * FROM filmes";
            $filmes_prepare = $conn->prepare($sql);
            $filmes_prepare->execute();

            while ($filme = $filmes_prepare->fetch()) {
                print_r($filme);
            }
        ?>
    </div>
</body>
</html>