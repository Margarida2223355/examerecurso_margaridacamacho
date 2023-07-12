<main class="m-auto">
    <table class="table w-auto text-center">
        <h1 class="h3 my-3 fw-normal text-center">
            Fatura <?= $fatura -> numero ?>
            Cliente <?= $fatura -> nomecliente ?>
            NIF <?= $fatura -> nifcliente ?>
        </h1>
        <thead>
            <tr>
                <th scope="col">Referência</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço Unitário</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Subtotal</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
                foreach($fatura -> linhafaturas as $linhafatura) { ?>
                    <tr>
                        <th><?= $linhafatura -> produto -> referencia?></th>
                        <th><?= $linhafatura -> produto -> descricao?></th>
                        <th><?= $linhafatura -> produto -> precounitario?></th>
                        <th><?= $linhafatura -> quantidade?></th>
                        <th><?= $linhafatura -> subtotal?></th>
                        <td>
                            <a href="index.php?c=linhafatura&a=edit&fatura_id=<?=$linhafatura->id ?>" class="btn btn-info" role="button">Editar</a>
                            <a href="index.php?c=linhafatura&a=delete&id=<?=$linhafatura -> id ?>" class="btn btn-info" role="button">Eliminar</a>
                        </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="container text-center">
        <a href="index.php?c=linhafatura&a=create&fatura_id=<?= $fatura -> id ?>" class="btn btn-info">Criar</a>
    </div>  
</main>