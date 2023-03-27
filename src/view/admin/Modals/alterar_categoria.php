<div class="modal fade" id="alterar-categoria">
    <div class="modal-dialog">
        <div class="modal-content bg-warning">
            <div class="modal-header">
                <h4 class="modal-title">Alterar Categoria</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" id="id_alt" name="id_alt">
                <label>Nome da Categoria</label>
                <input type="text" class="form-control" placeholder="Digite aqui.." name="nome_alt" id="nome_alt">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-outline-dark" name="btnalterar" onclick="return AlterarCategoria()">Salvar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->