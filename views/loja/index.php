<main class="m-auto">
    <table class="table w-auto text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
                foreach($lojas as $loja) { ?>
                    <tr>
                        <th><?= $loja -> id?></th>
                        <td><?= $loja -> nome?></td>
                        <td>
                            <a href="index.php?c=loja&a=show&id=<?=$loja->id ?>" class="btn btn-info" role="button">Mostrar</a>
                            <a href="index.php?c=loja&a=edit&id=<?=$loja->id ?>" class="btn btn-info" role="button">Editar</a>
                            <a href="index.php?c=loja&a=delete&id=<?=$loja->id ?>" class="btn btn-info" role="button">Eliminar</a>
                        </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="container text-center">
        <a href="index.php?c=loja&a=create" class="btn btn-info">Criar</a>
    </div>  
</main>