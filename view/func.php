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
            <h4 class="text-white text-nome text-center font-maestro">Maestro smed</h4>
            <div class="dropdown" id="drop-right">
                    <button class="btn dropdown-toggle btn-custom" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Perfil
                    </button> 
                    <div class="dropdown-menu drop-left" aria-labelledby="dropdownMenuButton">
                         <a class="nav-item nav-link link" href="">Configurações</a>
                        <a class="nav-item nav-link link" href="../index.php">Sair</a>
                    </div>
                </div>
        </nav>
        <div class="container mx-auto d-flex justify-content-center cont-format">

            <div id="mySidebar" class="container p-1 sidebar text-center">

                <div class="text-center sidenav-3 mx-2">
                    <img src="../content/img/user.png" class="py-3">
                    <h4 class="text-white side-op py-1 sidebarLink">Patrick.miranda</h4>
                    <a href="func.php">
                        <h4 class="text-white side-op-config py-1 sidebarLink" >Atividades</h4>
                    </a>
                    <a href="status.php">
                        <h4 class="text-white side-op-config py-1 sidebarLink" >Status Setup</h4>
                    </a>
                    <a href="mensagem.php">
                        <h4 class="text-white side-op-config py-1 sidebarLink">Mensagens</h4>
                    </a>
                    <a href="resultados.php">
                        <h4 class="text-white side-op-config py-1 sidebarLink">Resultados</h4>
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
                <h5>Atividades</h5>
                <hr>
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header text-center">
                            <span style="font-style: italic;">Em andamento</span>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Checar máquina
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Levar insumos para próximo da máquina
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Resolver problemas relacionados X
                                </label>
                            </div>
                        </div>
                    </div>
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