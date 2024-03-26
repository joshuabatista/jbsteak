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

    <!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">N° Pedido</th>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">R$</th>
      <th scope="col">Cliente</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">135418</th>
      <td>JB Cheddar</td>
      <td>1</td>
      <td>R$ 35,00</td>
      <td>Joshua</td>
      <td>Av. Antonio Ramiro da Silva</td>
      <td>980758718</td>
    </tr>
  </tbody>
</table> -->

    <div class="card align-items-center text-center" id="pedido1">
        <div>
            <label><b>N° do pedido</b></label>
            <p>13456</p>
        </div>
        <div>
            <label><b>Produto</b></label>
            <p>JB Cheddar</p>
        </div>
        <div>
            <label><b>Quantidade</b></label>
            <p>5</p>
        </div>
        <div>
            <label><b>R$</b></label>
            <p>R$ 150</p>
        </div>
        <div>
            <label><b>Cliente</b></label>
            <p>Joshua Batista</p>
        </div>
        <div>
            <label><b>Edereço</b></label>
            <p>Antonio Ramiro da Silva</p>
        </div>
        <div>
            <label><b>Telefone</b></label>
            <p>980758718</p>
        </div>
        <div>
            <label><b>Status</b></label>
            <p>
                <select>
                    <option>Pedido recebido</option>
                    <option>Em preparação</option>
                    <option>Finalizado</option>
                </select>
            </p>
        </div>
        <div>
            <button class="btn btn-danger">Excluir pedido</button>
        </div>
    </div>

    <script src="./assets/js/script-gestao-pedidos.js"></script>

</body>

</html>