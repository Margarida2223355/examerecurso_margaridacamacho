<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=user&a=update&id=<?= $user -> id ?>" method="POST">
        <h1 class="h3 my-3 fw-normal">
            User <b><?= $user -> id ?></b>
        </h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="nomecompleto" required value="<?php if(isset($user)) { echo $user -> nomecompleto; } ?>">
            <label for="floatingInput">Nome Completo</label>
            <?php if(isset($user->errors)){ echo $user->errors->on('nomecompleto'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="username" required value="<?php if(isset($user)) { echo $user -> username; } ?>">
            <label for="floatingInput">Username</label>
            <?php if(isset($user->errors)){ echo $user->errors->on('username'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="email" required value="<?php if(isset($user)) { echo $user -> email; } ?>">
            <label for="floatingInput">Email</label>
            <?php if(isset($user->errors)){ echo $user->errors->on('email'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="morada" required value="<?php if(isset($user)) { echo $user -> morada; } ?>">
            <label for="floatingInput">Morada</label>
            <?php if(isset($user->errors)){ echo $user->errors->on('morada'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="pais" required value="<?php if(isset($user)) { echo $user -> pais; } ?>">
            <label for="floatingInput">País</label>
            <?php if(isset($user->errors)){ echo $user->errors->on('pais'); }?>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="telefone" required value="<?php if(isset($user)) { echo $user -> telefone; } ?>">
            <label for="floatingInput">Telefone</label>
            <?php if(isset($user->errors)){ echo $user->errors->on('telefone'); }?>
        </div>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Atualizar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>