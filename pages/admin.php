<?php

	session_start();

	if(!isset($_SESSION["id"])){
		header("Location: /login");
		die;
	}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/style-admin.css">
    <link rel="icon" href="./images/Logo - JB Steak Burguer - 2023-07.png">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin | JB Steak</title>
</head>

<body>
    <!-- nav-bar -->
    <?php require "includes/header.php"; ?>

    <div class="logo d-flex justify-content-center">
        <img src="./images/Logo - JB Steak Burguer - 2023-07.png" id="imagem">
    </div>
    <hr id="linha-1">
    <div class="text-center">
        <h3 class="mb-3">Administrar cardapio</h3>
    </div>

    <div class="container-card"></div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editar-produto">
                        <input type="hidden" name="id" id="id">
                        <div class="text-center">
                            <img src="" id="imagem-produto-editar">
                        </div>
                        <div>
                            <label for="" class="label-editar"><b>Selecionar nova imagem</b></label>
                            <input type="file" name="imagem" id="" class="form-control">
                        </div>
                        <div>
                            <label for="" class="label-editar"><b>Nome do produto</b></label>
                            <input type="text" name="nome-produto" id="nome-produto-editar" class="form-control">
                        </div>
                        <div>
                            <label for="" class="label-editar"><b>Descrição</b></label>
                            <textarea name="descricao-produto" cols="25" rows="5" id="descricao-produto-editar"
                                class="form-control"></textarea>
                        </div>
                        <div>
                            <label for="" class="label-editar"><b>Valor</b></label>
                            <input type="text" name="valor-produto" id="valor-produto-editar" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="botao-fechar"
                        data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="botao-salvar">Salvar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/script.admin.js"></script>
</body>

</html>