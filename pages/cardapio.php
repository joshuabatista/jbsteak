
<?php

	session_start();


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
        integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../images/Logo - JB Steak Burguer - 2023-07.png">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Cardapio | JB Steak</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</head>

<body>

    <?php require "includes/header.php"; ?>

    <div class="d-flex justify-content-center logo">
        <img src="../images/Logo - JB Steak Burguer - 2023-07.png" id="image">
    </div>

    <div class="d-flex justify-content-center flex-column align-items-center" id="slogan">
        <h3 class="">JB Steak Burger</h3>
        <small>Seu Hamburguer na brasa (de verdade!!)</small>
    </div>
    <hr>
    <div class="d-flex justify-content-center mb-4" id="cardapio">
        <img src="../images/cardapio.png">
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Carrinho <img src="../images/carrinho.png"
                    id="carrinho">
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container-carrinho">
                <!-- renderizado no javascript -->
            </div>

        </div>
        <div class="col-md-9 offcanvas-end d-flex justify-content-center align-items-center">
            <div class="container-valor-subtotal">
                <h6>Valor Total <span class="subtotal"></span></h6>
            </div>
        </div>
        <div class="offcanvas-end d-flex justify-content-center align-items-center">
            <div class="col-md-9 container-subtotal text-center">
                <button class="btn btn-primary w-100" data-bs-toggle="modal"
                    data-bs-target="#exampleModal" disabled id="btn-finalizar">Finalizar</button>
            </div>
        </div>
    </div>

    <div class="container d-flex "></div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Finalizar Pedido</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="form-label">Nome <strong class="text-danger">*</strong></label>
                            <input type="text" placeholder="Nome" class="form-control" id="nome">
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Telefone <strong class="text-danger">*</strong></label>
                            <input type="number" placeholder="Telefone"class="form-control" id="telefone">
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label for="" class="form-label">Endereço <strong class="text-danger">*</strong></label>
                            <input type="text" placeholder="Endereço"class="form-control" id="endereco">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="btn-finalizar-pedido">Pedir</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/script.js"></script>
</body>

</html>