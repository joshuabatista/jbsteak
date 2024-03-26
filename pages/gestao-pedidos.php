<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style-gestao-pedidos.css">
    <link rel="icon" href="./images/Logo - JB Steak Burguer - 2023-07.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Gestão de pedidos | JB Steak</title>
</head>

<body>
    <?php require "includes/header.php"; ?>

    <div class="container">


        <div class="container-pedidos">
            
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informações Adicionais</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex">
                        <div class="row">
                            <label for=""><b>Endereço</b></label>
                            <p>Antonio Ramiro da Silva</p>
                        </div>
                        <div>
                            <label for=""><b>Telefone</b></label>
                            <p>(11)980758718</p>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <img src="./images/jb-cheddar.jpeg" alt="imagem do lanche">
                        </div>
                        <div>
                            <label for=""><b>Produto</b></label>
                            <p>JB Cheddar</p>
                        </div>
                        <div>
                            <label for=""><b>Quantidade</b></label>
                            <p>01</p>
                        </div>
                        <div>
                            <label for=""><b>R$</b></label>
                            <p>R$ 25,00</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/script-gestao-pedidos.js"></script>

</body>

</html>