<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=produto&a=update&id=<?= $produto -> id ?>" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Produto <b><?= $produto -> id ?></b>
        </h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="referencia" required value="<?php if(isset($produto)) { echo $produto -> referencia; } ?>">
            <label for="floatingInput">Referência</label>
            <?php if(isset($produto->errors)){ echo $produto->errors->on('referencia'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="descricao" required value="<?php if(isset($produto)) { echo $produto -> descricao; } ?>">
            <label for="floatingInput">Descrição</label>
            <?php if(isset($produto->errors)){ echo $produto->errors->on('descricao'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="precounitario" required value="<?php if(isset($produto)) { echo $produto -> precounitario; } ?>">
            <label for="floatingInput">Preço Unitário</label>
            <?php if(isset($produto->errors)){ echo $produto->errors->on('precounitario'); }?>
        </div>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Atualizar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>