<style>
    #img-nav {
        height: 100px;
        width: 100px;
    }

    #navbar {
        background-color: rgba(10, 1, 1, 0.651);
        border-bottom: 5px solid white;
    }

    .nav-link {
        color: white;
        border-radius: 8px;
        transition: all 500ms;
    }

    .nav-link:hover {
        background-color: rgb(163, 41, 41);
        border-radius: 10px ease;
        color: white;

    }
</style>

<nav class="navbar navbar-expand-lg" id="navbar">
    <a class="navbar-brand" href="#"><img id="img-nav" src="../images/Logo - JB Steak Burguer - 2023-07.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/"><b>Cardapio</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                    aria-controls="offcanvasExample"><b>Carrinho</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/administrar"><b>Administrador</b></a>
            </li>
                <li class="nav-item d-flex" id="login">
                    <a class="nav-link" href="/login"><b>Login</b></a>
                </li>
                <li class="nav-item d-flex" id="sair">
                    <a class="nav-link"><b>Sair</b></a>
                </li>
    </div>
</nav>