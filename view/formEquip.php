<?php
	
   // require_once('../model/readCli.php');
?>

<div class="modal fade modal-format" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" action="../model/insertEquip.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nameProd" class="form-control" placeholder="Nome do equipamento">
                    </div>
                    <div class="form-group">
                        <input type="date" name="data_compra" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="preco" class="form-control" placeholder="Preço do produto" min="0">
                    </div>
                    <div class="form-group">
                        <input type="text" name="tipo" class="form-control" placeholder="Tipo do produto">
                    </div>
                    <div class="form-group">
                        <input type="number" name="qtd_estoque" class="form-control" placeholder="Quantidade no estoque" min="0">
                    </div>
                    <div class="form-group">
                        <input type="number" name="prioridade" class="form-control" min="0">
                    </div>
            </div>
            <div class="modal-footer mx-auto">
                <input type="submit" name="submit" class="btn btn-info" value="Cadastrar">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
            </form>
        </div>
    </div>
</div>