<!-- Exibição de conteudo -->

<div id="conteudo"></div>

<!-- Caixa de exclusão -->
<div id="excluir_contato_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Excluir Contato</h4>
            </div>
            <div class="modal-body">
                <p>Confirma a exclusão do contato?</p>
            </div>
            <div class="modal-footer">
                <input type="hidden" id="contato_id" value="" />
                <button type="button" id="excluir" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
            </div>
        </div>
    </div>
</div>