<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <div class="container-card">
        <!-- <div class="card d-flex align-items-center mx-auto mt-3 card-adm">
            <div class="d-flex gap-3 align-items-center justify-content-center">
                <div>
                    <img src="./images/jb-cheddar.jpeg" alt id="lanche">
                </div>
                <div>
                    <h6><b>JB Cheddar</b></h6>
                    <p name="descricao" id=""> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor deleniti
                        voluptatum repellat nemo velit, reprehenderit iure exercitationem quam dolores inventore quisquam
                        dicta ipsum praesentium, debitis corporis doloremque voluptas, quos eius!</p>
                </div>
                <div>
                    <p>R$25,00</p>
                </div>
    
                <button class="btn btn-sm btn-success"><i class="fa-solid fa-pen"></i></button>
                <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Inativar
                    </label>
                </div>
            </div>
        </div> -->
    </div>

    <script src="./assets/js/script.admin.js"></script>
</body>

</html>