<div class="modal fade" id="modalConsult">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bg-overlay-green-leaf">
        <h5 class="modal-title">Записаться на консультацию</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="p-3">
        @include('blocks.footer_contact_form', ['type' => 'consult', 'heading' => 'Оставьте ваши контакты'])
      </div>
    </div>
  </div>
</div>