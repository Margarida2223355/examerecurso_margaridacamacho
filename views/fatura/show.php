<main class="m-auto">
    <table class="table w-auto text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Número</th>
                <th scope="col">Data de Emissão</th>
                <th scope="col">Nome Cliente</th>
                <th scope="col">Morada Cliente</th>
                <th scope="col">NIF Cliente</th>
                <th scope="col">Valor Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?= $fatura -> id ?></th>
                <td><?= $fatura -> numero ?></td>
                <td><?= $fatura -> dataemissao ?></td>
                <td><?= $fatura -> nomecliente ?></td>
                <td><?= $fatura -> moradacliente ?></td>
                <td><?= $fatura -> nifcliente ?></td>
                <td><?= $fatura -> valortotal ?></td>
            </tr>
        </tbody>
    </table>
    <div class="container text-center">
        <a href="index.php?c=fatura&a=index" class="btn btn-info">Voltar</a>
    </div>  
</main>