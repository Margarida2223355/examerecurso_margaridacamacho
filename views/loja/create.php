<main class="form-signin m-auto">
    <form action="index.php?c=loja&a=store" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Criar Loja
        </h1>
        <div class="row">
            <div class="col-md-auto ">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nome" required value="<?php if(isset($loja)) { echo $loja -> nome; } ?>">
                    <label for="floatingInput">Nome</label>
                    <?php if(isset($loja->errors)){ echo $loja->errors->on('nome'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nif" required value="<?php if(isset($loja)) { echo $loja -> nif; } ?>">
                    <label for="floatingPassword">NIF</label>
                    <?php if(isset($loja->errors)){ echo $loja->errors->on('nif'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="morada" value="<?php if(isset($loja)) { echo $loja -> morada; } ?>">
                    <label for="floatingInput">Morada</label>
                    <?php if(isset($loja->errors)){ echo $loja->errors->on('morada'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="telefone" value="<?php if(isset($loja)) { echo $loja -> telefone; } ?>">
                    <label for="floatingInput">Telefone</label>
                    <?php if(isset($loja->errors)){ echo $loja->errors->on('telefone'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="email" value="<?php if(isset($loja)) { echo $loja -> email; } ?>">
                    <label for="floatingInput">Email</label>
                    <?php if(isset($loja->errors)){ echo $loja->errors->on('email'); }?>
                </div>
            </div>
        </div>
        <div class="d-grid">
            <button class="mt-3 btn btn-primary btn-lg" type="submit">Criar</button>
            <p class="mt-4 text-muted">Margarida Camacho @ 2022-2023</p>
        </div>
    </form>
</main>