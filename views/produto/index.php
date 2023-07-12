<main class="m-auto">
    <table class="table w-auto text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Referência</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
                foreach($produtos as $produto) { ?>
                    <tr>
                        <th><?= $produto -> id?></th>
                        <td><?= $produto -> referencia?></td>
                        <td>
                            <a href="index.php?c=produto&a=show&id=<?=$produto->id ?>" class="btn btn-info" role="button">Mostrar</a>
                            <a href="index.php?c=produto&a=edit&id=<?=$produto->id ?>" class="btn btn-info" role="button">Editar</a>
                            <a href="index.php?c=produto&a=delete&id=<?=$produto->id ?>" class="btn btn-info" role="button">Eliminar</a>
                        </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="container text-center">
        <a href="index.php?c=produto&a=create" class="btn btn-info">Criar</a>
    </div>  
</main>