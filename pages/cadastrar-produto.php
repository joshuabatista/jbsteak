
<?php

	session_start();

	if(!isset($_SESSION["id"])){
		header("Location: /login");
		die;
	}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./assets/css/style-cadastrar-produto.css">
	<link rel="icon" href="./images/Logo - JB Steak Burguer - 2023-07.png">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<title>Cadastrar produto | JB Steak</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
		integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
	<?php require "includes/header.php"; ?>
	<div class="logo d-flex justify-content-center">
		<img src="./images/logo_animada_jb.gif">
	</div>
	<ul class="nav nav-tabs mt-2 tabs-uge d-flex">
        <li class="nav-item" id="editar">
            <a class="nav-link nav-nav" href="/admin"><b>Editar cardapio</b></a>
        </li>
        <li class="nav-item nav-nav" id="cadastrar">
            <a class="nav-link active" aria-current="page" href="/cadastrar"><b>Cadastrar produto</b></a>
        </li>
    </ul>
	<br>
	<div class="text-center">
		<h3>Cadastrar novo produto</h3>
	</div>
	<form id="cadastrar-produto">
		<div class="container d-flex">
			<label class="form-label">Nome do produto</label>
			<input name="produto" type="text" placeholder="...">
			<hr>
			<label class="form-label">Tipo do produto</label>
			<select name="tipo" id="">
				<option value="Hamburguer">Hamburguer</option>
				<option value="Acompanhamento">Acompanhamento</option>
				<option value="Bebida">Bebida</option>
			</select>
			<hr>
			<label class="form-label">Descrição do produto</label>
			<textarea name="descricao" id="" cols="30" rows="3" placeholder="..."></textarea>
			<hr>
			<label class="form-label">Valor do produto em R$</label>
			<input name="valor" type="number" placeholder="Valor do produto">
			<hr>
			<label class="form-label">Imagem do produto</label>
			<input name="image" type="file" id="image">
		</div>
	</form>
		<div class="d-flex justify-content-center mt-2 text-center" id="botao">
			<button class="btn btn-success btn-salvar">Salvar</button>
		</div>


	<script src="./assets/js/script-cadastrar.js"></script>
</body>

</html>