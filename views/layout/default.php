<!-- views/layout/default.php -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <title><?= APP_NAME ?></title>
</head>
<body class="d-flex align-items-center" style="min-height: 100vh;">
    <header>
         <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
               <a class="navbar-brand" href="index.php?c=home&a=search">Procurar</a>
               <a class="navbar-brand" href="index.php?c=home&a=home">Home</a>
               <a class="navbar-brand" href="index.php?c=home&a=logout">Logout</a>
            </div>
         </nav>
      </header>
<?php require_once($viewPath); ?>

<script src="public/js/bootstrap.js"></script>
</body>
</html>