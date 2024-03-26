<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style-admin-prod.css">
    <link rel="icon" href="./images/Logo - JB Steak Burguer - 2023-07.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Administrar produtos | JB Steak</title>
</head>

<body>
    <!-- nav-bar -->
    <?php require "includes/header.php"; ?>

    <div class="logo d-flex justify-content-center">
        <img src="./images/logo_animada_jb.gif" id="imagem">
    </div>
    <hr id="linha-1">
    <div class="text-center">
        <h3 class="mb-3">Administração</h3>
    </div>

    <div class="components">
        <a href="/admin" class="componente">
            <div class="">
                <div class="d-flex mt-1">
                    <img src="./images/card-adm.png" id="card-adm">
                </div>
                <div class="text-center mt-3">
                    <h6>Administrar cardapio</h6>
                </div>
            </div>
        </a>



        <div class="componente">
            <a href="/gestao">
                <div class="d-flex mt-1">
                    <img src="./images/pedido.png" id="card-pedidos">
                </div>
                <div class="text-center mt-3">
                    <h6>Gerenciar pedidos</h6>
                </div>
            </a>
        </div>
    </div>

</body>

</html>