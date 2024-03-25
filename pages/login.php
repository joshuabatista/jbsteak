<?php

	session_start();

	if(isset($_SESSION["id"])){
		header("Location: /admin");
		die;
	}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style-login.css">
    <link rel="icon" href="./images/Logo - JB Steak Burguer - 2023-07.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Login | JB Steak</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<?php require "includes/header.php"; ?>
    <div class="container">
        <div class="login">
            <div class="titulo">
                <img src="./images/logo_animada_jb.gif" alt="">
            </div>
            <form id="form-login">
                <div class="forms">
                    <input type="text" id="email" name="email" placeholder="Email">
                    <input type="password" id="senha" name="senha" placeholder="Senha">
                    <button type="button" id="entrar"><B>ENTRAR</B></button>
                </div>
            </form>
        </div>
    </div>
    <script src="./assets/js/script-logar.js"></script>
</body>

</html>