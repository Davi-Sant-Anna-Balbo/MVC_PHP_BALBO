<h1>Lista de Filmes</h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Ano</th>
        <th>Nota</th>
        <th>Gênero</th>
        <th>Ações</th>
    </tr>

    <?php if ($filmes->num_rows > 0): ?>
        <?php while($linha = $filmes->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($linha['nome']) ?></td>
            <td><?= htmlspecialchars($linha['ano']) ?></td>
            <td><?= htmlspecialchars($linha['nota']) ?></td>
            <td><?= htmlspecialchars($linha['genero']) ?></td>

            <td>
                <a href="?action=editar&id=<?= $linha['id'] ?>">Editar</a>
                <a href="?action=deletar&id=<?= $linha['id'] ?>">Deletar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">Nenhum filme encontrado.</td>
        </tr>
    <?php endif; ?>

</table>

<a href="?action=adicionar">Cadastro</a>