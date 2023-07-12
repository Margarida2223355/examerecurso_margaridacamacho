<table class="table w-auto text-center">
    <h1 class="h3 my-3 fw-normal text-center">
        Utilizadores
    </h1>
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome Completo</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
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
            <td><?= $user -> telefone ?></td>
            <td><?= $user -> role ?></td>
        </tr>
    </tbody>
    <td>
        <a href="index.php?c=auth&a=home" class="btn btn-info" role="button">Voltar</a>
    </td>
</table>