<div>
    <br>
    <h1 style="margin-left: 1rem;">Lista de Filmes</h1>
    <br>

    <?php
        $sql = "SELECT * FROM filmes";
        $filmes_prepare = $conn->prepare($sql);
        $filmes_prepare->execute();
    ?>

    <table class="table table-dark table-striped" style="margin-left: 1rem; width: 98vw;">
        <thead class="table-dark">
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Resumo</th>
                <th>Ano</th>
                <th>Imagem</th>
                <th>Complementos</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($filme = $filmes_prepare->fetch()) {
                    echo "<tr>";
                    echo "<td>".$filme['codigo']."</td>";
                    echo "<td>".$filme['nome']."</td>";
                    echo "<td>".$filme['resumo']."</td>";
                    echo "<td>".$filme['ano']."</td>";
                    echo "<td>".$filme['imagem']."</td>";
                    echo "<td>".$filme['complementos']."</td>";
                    echo "
                        <td>
                            <a  class=\"btn btn-info\" href=\"?pagina=editar&codigo=".$filme['codigo']."\">Editar</a>
                            <br>
                            <a class=\"btn btn-danger\" href=\"?pagina=deletar&codigo=".$filme['codigo']."\">Deletar</a>
                        </td>
                    ";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <a href="?pagina=cadastrar" class="btn btn-primary" style="margin-left: 1rem;">Cadastrar filmes</a>
</div>