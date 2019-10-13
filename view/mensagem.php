<!DOCTYPE html>
<html>

<head>
    <title>Painel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../content/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../content/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash&display=swap" rel="stylesheet">

    <body>
        <nav class="navbar navbar-dark navbar-custom sh">

            <button class="openbtn btn-custom text-span" id="side"><img src="../content/img/side.png" id="image"></button>
            <h4 class="text-white text-nome text-center font-maestro">Maestro</h4>
            <div class="dropdown" id="drop-left">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="nav-item nav-link link" href="../controller/logout.php">Sair</a>
                </div>
            </div>
        </nav>
        <div class="container mx-auto d-flex justify-content-center cont-format">

            <div id="mySidebar" class="container p-1 sidebar text-center">

                <div class="text-center sidenav-3 mx-2">
                    <img src="../content/img/user.png" class="py-3">
                    <h4 class="text-white side-op py-1">raymison.ramos</h4>
                    <a href="func.php">
                        <h4 class="text-white side-op-config py-1" >Atividades</h4>
                    </a>
                    <a href="status.php">
                        <h4 class="text-white side-op-config py-1" >Status Setup</h4>
                    </a>
                    <a href="mensagem.php">
                        <h4 class="text-white side-op-config py-1">Mensagens</h4>
                    </a>
                </div>
                <hr class="hr">
                <div class="text-center sidenav-3">
                    <h6 class="text-white">Sair</h6>
                </div>
            </div>
            <div id="main">
                <br>
                <hr>
                <div class="w3-teal">
                <hr>
                <h5>Mensagens</h5>
                <hr>
                <div class="w3-container">
                    <div class="card">
                        <div class="card-header">
                            Raymison Maklouf

                        </div>

                        <div class="card-body">

                            <p class="card-text">Ela precisa trocar o molde tamanho 10 para retornar ao estado inicial.</p>
                            <h6 class="text-right">Agora</h6>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            Leticia Hakcton
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Defeito na máquina 14</h5>
                            <p class="card-text">Ela precisa trocar o molde tamanho 10 para retornar ao estado inicial.</p>
                            <h6 class="text-right">Há 7 minutos</h6>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-header">
                            Leticia Hakcton
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Defeito na máquina 14</h5>
                            <p class="card-text">Ela precisa trocar o molde tamanho 10 para retornar ao estado inicial.</p>
                            <h6 class="text-right">Há 7 minutos</h6>
                        </div>
                    </div>
                    <nav aria-label="Page navigation example" class="py-2">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
                        </ul>
                    </nav>
                </div>
                </div>
                <br>
            </div>

        </div>

    </body>
    
    <script type="text/javascript" src="../content/js/app/collapse.js"></script>
    <script type="text/javascript" src="../content/js/app/functions.js"></script>
    <script type="text/javascript" src="../content/js/app/validation.js"></script>
    <script type="text/javascript" src="../content/js/app/drop-menu.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="content/js/dropSelect.js"></script>
    <script type="text/javascript" type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>