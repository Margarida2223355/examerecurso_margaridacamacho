<main class="m-auto">
    <table class="table w-auto text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Role</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
                foreach($users as $user) { ?>
                    <tr>
                        <th><?= $user -> id?></th>
                        <td><?= $user -> username?></td>
                        <td><?= $user -> role?></td>
                        <td>
                            <a href="index.php?c=user&a=show&id=<?=$user->id ?>" class="btn btn-info" role="button">Mostrar</a>
                            <a href="index.php?c=user&a=edit&id=<?=$user->id ?>" class="btn btn-info" role="button">Editar</a>
                            <a href="index.php?c=user&a=delete&id=<?=$user->id ?>" class="btn btn-info" role="button">Eliminar</a>
                        </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="container text-center">
        <a href="index.php?c=user&a=create" class="btn btn-info">Criar</a>
    </div>  
</main>