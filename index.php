<?php

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="content/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="content/css/style_login.css">
    </head>

    <body>
        <div class="container-fluid py-5">
            <div class="d-flex justify-content-center">
                
                <div class="login text-center">
                    <h5>Sistema de gerenciamento</h5>
                    <form method="POST" action="view/func.php" class="py-2">
                    <div class="form-group">
                        <input type="text" name="user" class="form-control form-input" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control form-input" placeholder="Senha">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-md btn-custom">Entrar</button>
                    </div>
                    <div class="form-group">
                        <a href="#">Esqueceu a senha?</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </body>

    </html>