<?php
    if (isset($_POST['deletar'])) {
        $sql_delete = "DELETE
                       FROM filmes
                       WHERE codigo = :codigo
        ";
        $delete_prepare = $conn->prepare($sql_delete);
        if ($delete_prepare->execute(array("codigo" => $_GET['codigo']))) {
            echo "
                <br>
                <div class=\"alert alert-success\">
                    Filme excluído com sucesso!
                </div>
            ";
        }
    } else {
    $sql = "SELECT * 
            FROM filmes 
            WHERE codigo = :codigo";
    $filme_prepare = $conn->prepare($sql);
    $filme_prepare->execute(array("codigo"=>$_GET['codigo']));

    $filme = $filme_prepare->fetch();
?>

<table class="table">
    <tr>
        <td>Código</td>
        <td>
            <?php echo $filme['codigo']; ?>
        </td>
    </tr>

    <tr>
        <td>Nome</td>
        <td>
            <?php echo $filme['nome']; ?>
        </td>
    </tr>

    <tr>
        <td>Resumo</td>
        <td>
            <?php echo $filme['resumo']; ?>
        </td>
    </tr>
</table>
<form method="post">

    <input class="btn btn-danger" type="submit" name="deletar" value="Deletar">
</form>

<?php
    }
?>