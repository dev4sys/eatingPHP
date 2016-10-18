<html>
<head></head>
<body>
<h1>"BTest"</h1>

<table>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>level</th>
    </tr>

    <!-- Ici se trouve l'itération sur l'objet query de nos $articles, l'affichage des infos des articles -->

    <?php foreach ($fighters as $fighter): ?>
    <tr>
        <td><?= $fighter->player_id ?></td>
        <td>
           <?= $fighter->name ?>
        </td>
        <td>
            <?= $fighter->level ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>