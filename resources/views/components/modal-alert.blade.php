<div class="modal modal_no-visible" id="modal_alert_windows">
    <div class="modal-dialog">
        <header class="modal-header">
            <span class="modal-alert-header__txt">ALERTA</span>
            <button class="close-modal close_modalAlert">✕</button>
        </header>
        <section class="modal-content">
            <div class="modal-content_wrap ">
                <p>Esta acción no podrá revertirse, ¿estas segudo de eliminar el registro?</p>
                <div class="modal-buttons__content modal-footer">
                    <form action="" id="formulario_confirmar" method="POST">
                        @csrf
                        <input type="hidden" id="id_renter" value="">
                        <button class="btn_danger close_modalAlert2">Cancelar</button>
                        <button class="btn_primary" id="button_delete" onclick="delete_isConfirmed()">Borrar</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
