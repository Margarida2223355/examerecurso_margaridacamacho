<main class="m-auto">
    <table class="table w-auto text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">NIF</th>
                <th scope="col">Email</th>
                <th scope="col">Morada</th>
                <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?= $loja -> id ?></th>
                <td><?= $loja -> nome ?></td>
                <td><?= $loja -> nif ?></td>
                <td><?= $loja -> email ?></td>
                <td><?= $loja -> morada ?></td>
                <td><?= $loja -> telefone ?></td>
            </tr>
        </tbody>
    </table>
    <div class="container text-center">
        <a href="index.php?c=loja&a=index" class="btn btn-info">Voltar</a>
    </div>  
</main>