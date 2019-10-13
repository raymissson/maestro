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
                <div class="dropdown" id="drop-right">
                    <button class="btn dropdown-toggle btn-custom" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Perfil
                    </button> 
                    <div class="dropdown-menu drop-left" aria-labelledby="dropdownMenuButton">
                         <a class="nav-item nav-link link" href="">Configurações</a>
                        <a class="nav-item nav-link link" href="../index.php">Sair</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mx-auto d-flex justify-content-center cont-format">

            <div id="mySidebar" class="container p-1 sidebar text-center">
                <div class="text-center sidenav-3 mx-2">
                    <img src="../content/img/user.png" class="py-3">
                    <h4 class="text-white side-op py-1">Patrick.Miranda</h4>
                    <h4 class="text-white side-op-config py-1">Configurações</h4>
                </div>
                <hr class="hr">
                
                <div class="text-center sidenav-2 mx-2">
                    <button class="dropdown-btn mx-auto text-center"> Funcionários<img src="../content/img/arrow.png" class="imgA" id="imgA"></button>
                    <div class="dropdown-container">

                        <a href="" data-toggle="modal" data-target="#modal1">
                            <div class="bg-btn text-center">
                                <label><img src="../content/img/user_register.png"> Cadastrar</label>
                            </div>
                        </a>
                        <button class="openbtn" id="action">
                            <div class="bg-btn text-center" id="client">
                                <label><img src="../content/img/list.png"> Lista</label>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="text-center sidenav-3">
                    <button class="dropdown-btn mx-auto text-center"> Setores<img src="../content/img/arrow.png" class="imgA" id="imgA">
                    </button>

                    <div class="dropdown-container">
                        <a href="" data-toggle="modal" data-target="#modal3">
                            <div class="bg-btn">
                                <label><img src="../content/img/edit_dep.png"> Cadastrar</label>
                            </div>
                        </a>
                        <button class="openbtn" id="actionDep">
                            <div class="bg-btn" id="client">
                                <label><img src="../content/img/list.png"> Lista</label>
                            </div>
                        </button>
                    </div>
                </div>
                <hr class="hr">
                <div class="text-center sidenav-3">

                        <a href="" data-toggle="modal" data-target="#modal4">
                            <div class="bg-btn">
                                <label><img src="../content/img/edit_dep.png"> Cadastrar Ocorrência</label>
                            </div>
                        </a>
                </div>
                <hr class="hr">
                <div class="text-center sidenav-3">
                    <h6 class="text-white">Sair</h6>
                </div>
            </div>
            <div id="main">
                 <hr>
                <h5>Status geral do Setup</h5>
                <hr>
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header text-center">
                            <div class="text-right">
                                <span class="dot-1"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-check py-2">
                                <label class="form-check-label" for="defaultCheck1">
                                    Departamento envolvido: XXX
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="defaultCheck1">
                                    Setup em execução: XXX
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-teal">
                </div>
                <br>
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
                </div>
                <br>
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

        <?php
            require_once('gerarOcorrencia.php');
        ?>
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