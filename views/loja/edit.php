<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=loja&a=update&id=<?= $loja -> id ?>" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Loja <b><?= $loja -> id ?></b>
        </h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="nome" required value="<?php if(isset($loja)) { echo $loja -> nome; } ?>">
            <label for="floatingInput">Nome</label>
            <?php if(isset($loja->errors)){ echo $loja->errors->on('nome'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="nif" required value="<?php if(isset($loja)) { echo $loja -> nif; } ?>">
            <label for="floatingInput">NIF</label>
            <?php if(isset($loja->errors)){ echo $loja->errors->on('nif'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="email" required value="<?php if(isset($loja)) { echo $loja -> email; } ?>">
            <label for="floatingInput">Email</label>
            <?php if(isset($loja->errors)){ echo $loja->errors->on('email'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="morada" required value="<?php if(isset($loja)) { echo $loja -> morada; } ?>">
            <label for="floatingInput">Morada</label>
            <?php if(isset($loja->errors)){ echo $loja->errors->on('morada'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="telefone" required value="<?php if(isset($loja)) { echo $loja -> telefone; } ?>">
            <label for="floatingInput">Telefone</label>
            <?php if(isset($loja->errors)){ echo $loja->errors->on('telefone'); }?>
        </div>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Atualizar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>