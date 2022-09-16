<?php
    include "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Filmes</title>
</head>
<body>
    <div>
        <h1>Lista de Filmes</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Resumo</th>
                    <th>Ano</th>
                    <th>Imagem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM filmes";
                    $filmes_prepare = $conn->prepare($sql);
                    $filmes_prepare->execute();
                    while ($filme = $filmes_prepare->fetch()) {
                        echo "<tr>";
                        echo "<td>".$filme['codigo']."</td>";
                        echo "<td>".$filme['nome']."</td>";
                        echo "<td>".$filme['resumo']."</td>";
                        echo "<td>".$filme['ano']."</td>";
                        echo "<td>".$filme['imagem']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>