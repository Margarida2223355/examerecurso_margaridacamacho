<main class="form-signin m-auto">
    <form action="index.php?c=fatura&a=search" method="POST">
        <h1 class="h3 my-3 fw-normal">Procurar Faturas por NIF</h1>
        <div class="row">
            <div class="col mx-auto">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nifcliente" required>
                    <label for="floatingInput">NIF</label>
                </div>
            </div>
        </div>
        <div class="d-grid">
            <button class="mt-3 btn btn-primary btn-lg" type="submit">Procurar</button>
            <p class="mt-4 text-muted text-center">Margarida Camacho @ 2022-2023</p>
        </div>
    </form>
</main>