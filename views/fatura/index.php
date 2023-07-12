<main class="m-auto">
    <table class="table w-auto text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Número</th>
                <th scope="col">Valor Total</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
                foreach($faturas as $fatura) { ?>
                    <tr>
                        <th><?= $fatura -> id?></th>
                        <td><?= $fatura -> numero?></td>
                        <td><?= $fatura -> valortotal?></td>
                        <td>
                            <a href="index.php?c=fatura&a=show&id=<?=$fatura->id ?>" class="btn btn-info" role="button">Mostrar</a>
                            <a href="index.php?c=fatura&a=edit&id=<?=$fatura->id ?>" class="btn btn-info" role="button">Editar</a>
                            <a href="index.php?c=fatura&a=delete&id=<?=$fatura->id ?>" class="btn btn-info" role="button">Eliminar</a>
                            <a href="index.php?c=linhafatura&a=index&fatura_id=<?=$fatura->id ?>" class="btn btn-info" role="button">Linhas</a>
                        </td>
                    </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="container text-center">
        <a href="index.php?c=fatura&a=create" class="btn btn-info">Criar</a>
    </div>  
</main>