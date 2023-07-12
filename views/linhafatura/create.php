<main class="form-signin m-auto">
    <form action="index.php?c=linhafatura&a=store" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Criar Linha
        </h1>
        <div class="row">
            <div class="col-md-auto ">
                <div class="form-floating mb-3">
                    <select class="form-select" name=produto_id required value="<?php if(isset($linhafatura)) { echo $linhafatura -> produto -> id; } ?>">
                        <?php
                            foreach($produtos as $produto) {?>
                                <option value=<?= $produto -> id?>><?= $produto -> descricao?></option>
                            <?php } ?>
                    </select>
                    <label for="floatingInput">Produtos</label>
                    <?php if(isset($episodio->errors)){ echo $episodio->errors->on('produto_id'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="quantidade" value="<?php if(isset($linhafatura)) { echo $linhafatura -> quantidade; } ?>">
                    <label for="floatingInput">Quantidade</label>
                    <?php if(isset($linhafatura->errors)){ echo $linhafatura->errors->on('quantidade'); }?>
                </div>
            </div>
            <input type="hidden" name="fatura_id" value="<?= $fatura -> id ?>">
        </div>
        <div class="d-grid">
            <button class="mt-3 btn btn-primary btn-lg" type="submit">Criar</button>
            <p class="mt-4 text-muted">Margarida Camacho @ 2022-2023</p>
        </div>
    </form>
</main>