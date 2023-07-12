<main class="form-signin m-auto">
    <form action="index.php?c=fatura&a=store" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Criar Fatura
        </h1>
        <div class="row">
            <div class="col-md-auto ">
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
            </div>
        </div>
        <div class="d-grid">
            <button class="mt-3 btn btn-primary btn-lg" type="submit">Criar</button>
            <p class="mt-4 text-muted">Margarida Camacho @ 2022-2023</p>
        </div>
    </form>
</main>