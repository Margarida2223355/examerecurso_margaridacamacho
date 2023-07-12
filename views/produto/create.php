<main class="form-signin m-auto">
    <form action="index.php?c=produto&a=store" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Criar Protudo
        </h1>
        <div class="row">
            <div class="col-md-auto ">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="referencia" required value="<?php if(isset($produto)) { echo $produto -> referencia; } ?>">
                    <label for="floatingInput">Referência</label>
                    <?php if(isset($produto->errors)){ echo $produto->errors->on('referencia'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="descricao" required value="<?php if(isset($produto)) { echo $produto -> descricao; } ?>">
                    <label for="floatingPassword">Descrição</label>
                    <?php if(isset($produto->errors)){ echo $produto->errors->on('descricao'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="precounitario" value="<?php if(isset($produto)) { echo $produto -> precounitario; } ?>">
                    <label for="floatingInput">Preço Unitário</label>
                    <?php if(isset($produto->errors)){ echo $produto->errors->on('precounitario'); }?>
                </div>
            </div>
        </div>
        <div class="d-grid">
            <button class="mt-3 btn btn-primary btn-lg" type="submit">Criar</button>
            <p class="mt-4 text-muted">Margarida Camacho @ 2022-2023</p>
        </div>
    </form>
</main>