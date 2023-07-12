<main class="form-signin m-auto">
    <form action="index.php?c=user&a=store" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Criar Utilizador
        </h1>
        <div class="row">
            <div class="col-md-auto ">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nomecompleto" required value="<?php if(isset($user)) { echo $user -> nomecompleto; } ?>">
                    <label for="floatingInput">Nome Completo</label>
                    <?php if(isset($user->errors)){ echo $user->errors->on('nomecompleto'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" required value="<?php if(isset($user)) { echo $user -> username; } ?>">
                    <label for="floatingPassword">Username</label>
                    <?php if(isset($user->errors)){ echo $user->errors->on('username'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" required>
                    <label for="floatingInput">Password</label>
                    <?php if(isset($user->errors)){ echo $user->errors->on('password'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="email" value="<?php if(isset($user)) { echo $user -> email; } ?>">
                    <label for="floatingInput">Email</label>
                    <?php if(isset($user->errors)){ echo $user->errors->on('email'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="morada" value="<?php if(isset($user)) { echo $user -> morada; } ?>">
                    <label for="floatingInput">Morada</label>
                    <?php if(isset($user->errors)){ echo $user->errors->on('morada'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="pais" value="<?php if(isset($user)) { echo $user -> pais; } ?>">
                    <label for="floatingInput">País</label>
                    <?php if(isset($user->errors)){ echo $user->errors->on('pais'); }?>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="telefone" value="<?php if(isset($user)) { echo $user -> telefone; } ?>">
                    <label for="floatingInput">Telefone</label>
                    <?php if(isset($user->errors)){ echo $user->errors->on('telefone'); }?>
                </div>
                <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Role</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" value="Admin">
                            <label class="form-check-label">
                            <?php if(isset($user->errors)){ echo $user->errors->on('role'); }?>
                            Admin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" value="Funcionario" checked>
                            <label class="form-check-label">
                            <?php if(isset($user->errors)){ echo $user->errors->on('role'); }?>
                            Funcionário
                            </label>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="d-grid">
            <button class="mt-3 btn btn-primary btn-lg" type="submit">Criar</button>
            <p class="mt-4 text-muted">Margarida Camacho @ 2022-2023</p>
        </div>
    </form>
</main>