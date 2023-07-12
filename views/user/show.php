<main class="m-auto">
    <table class="table w-auto text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome Completo</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Morada</th>
                <th scope="col">País</th>
                <th scope="col">Telefone</th>
                <th scope="col">Role</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?= $user -> id ?></th>
                <td><?= $user -> nomecompleto ?></td>
                <td><?= $user -> username ?></td>
                <td><?= $user -> email ?></td>
                <td><?= $user -> morada ?></td>
                <td><?= $user -> pais ?></td>
                <td><?= $user -> telefone ?></td>
                <td><?= $user -> role ?></td>
            </tr>
        </tbody>
    </table>
    <div class="container text-center">
        <a href="index.php?c=user&a=index" class="btn btn-info">Voltar</a>
    </div>  
</main>