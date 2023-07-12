<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=fatura&a=update&id=<?= $fatura -> id ?>" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Fatura <b><?= $fatura -> id ?></b>
        </h1>
        <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="numero" required value="<?php if(isset($fatura)) { echo $fatura -> numero; } ?>">
                    <label for="floatingInput">Número</label>
                    <?php if(isset($fatura->errors)){ echo $fatura->errors->on('numero'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="dataemissao" required value="<?php if(isset($fatura)) { echo $fatura -> dataemissao; } ?>">
                    <label for="floatingInput">Data Emissão</label>
                    <?php if(isset($fatura->errors)){ echo $fatura->errors->on('dataemissao'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nomecliente" required value="<?php if(isset($fatura)) { echo $fatura -> nomecliente; } ?>">
                    <label for="floatingPassword">Nome Cliente</label>
                    <?php if(isset($fatura->errors)){ echo $fatura->errors->on('nomecliente'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="moradacliente" value="<?php if(isset($fatura)) { echo $fatura -> moradacliente; } ?>">
                    <label for="floatingInput">Morada Cliente</label>
                    <?php if(isset($fatura->errors)){ echo $fatura->errors->on('moradacliente'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nifcliente" value="<?php if(isset($fatura)) { echo $fatura -> nifcliente; } ?>">
                    <label for="floatingInput">NIF Cliente</label>
                    <?php if(isset($fatura->errors)){ echo $fatura->errors->on('nifcliente'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="valortotal" value="<?php if(isset($fatura)) { echo $fatura -> valortotal; } ?>">
                    <label for="floatingInput">Valor Total</label>
                    <?php if(isset($fatura->errors)){ echo $fatura->errors->on('valortotal'); }?>
                </div>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Atualizar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>