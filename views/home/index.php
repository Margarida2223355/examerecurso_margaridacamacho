<?php
/**
 * Created by PhpStorm.
 * User: JoanaPedrosa
 * Date: 11/07/2023
 * Time: 12:10
 */
?>
<main class="form-signin m-auto">
    <form action="index.php?c=home&a=login" method="POST">
        <div class="container text-center">
            <p class="h1 mb-3 fw-normal align-self-center">LOGIN</p>
        </div>
        <div class="form-floating mb-3">
            <input type="username" class="form-control" name="fuser" placeholder="username" required>
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="fpass" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-primary w-50 py-2 col">Login</button>
            <p class="mt-5 mb-3 text-body-secondary">Margarida Camacho © 2022–2023</p>
        </div>   
    </form>
</main>