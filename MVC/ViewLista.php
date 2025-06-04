    <!-- Camada VIEW (2): Esta página apresenta informações ao usuário !-->
    <h2>Usuário cadastrado</h2>
    <ul>
    <?php foreach ($usuario as $user): ?>
        <li>Nome: <?= $user['nome'] ?>, Email: <?= $user['email'] ?></li>
    <?php endforeach; ?>
    </ul>