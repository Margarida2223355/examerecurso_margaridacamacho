<main class="m-auto">
    <table class="table w-auto text-center">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Referência</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço Unitário</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?= $produto -> id ?></th>
                <td><?= $produto -> referencia ?></td>
                <td><?= $produto -> descricao ?></td>
                <td><?= $produto -> precounitario ?></td>
            </tr>
        </tbody>
    </table>
    <div class="container text-center">
        <a href="index.php?c=produto&a=index" class="btn btn-info">Voltar</a>
    </div>  
</main>