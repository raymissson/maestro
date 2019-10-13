<div class="modal fade modal-format" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gerar ocorrência de setup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form" action="../model/insertDep.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nome" class="form-control" placeholder="Criador da ocorrência" value="Patrick R Miranda" disabled="">
                    </div>
                     <div class="form-group">
                        <input type="text" name="nEndereco" class="form-control" placeholder="E-mail do criador" value="patrick@mail.com" disabled="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="endereco" class="form-control" placeholder="Responsável pela área" value="Fulano" disabled="">
                    </div>
                      <div class="form-group">
                        <input type="text" name="nEndereco" class="form-control" placeholder="E-mail do criador" value="fulano@mail.com" disabled="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="contato" class="form-control" placeholder="Nº RNC(PTV)">
                    </div>
                     <div class="form-group">
                        <input type="text" name="contato" class="form-control" placeholder="Nº RNC(PTV)">
                    </div>
                     <div class="form-group">
                        <input type="date" name="contato" class="form-control" value="13/10/2019" disabled="">
                    </div>
                     <div class="form-group">
                        <input type="time" name="contato" class="form-control" disabled="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="ramal" class="form-control" placeholder="Ramal">
                    </div>
                   
                    <div class="form-group">
                       <select class="form-control">
                           <option>Área de ocorrência</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <input type="number" name="qtd_equip" class="form-control" placeholder="Unidade">
                    </div>

            </div>
            <div class="modal-footer mx-auto">
                <input type="submit" name="submit" class="btn btn-info" value="Gerar">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
            </form>
        </div>
    </div>
</div>