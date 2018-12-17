<!-- The Modal -->
<div class="modal fade" id="modalCallback">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bg-overlay-green-leaf">
        <h5 class="modal-title">Контактная форма</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="p-3">
        @include('blocks.footer_contact_form', ['type' => 'callback', 'heading' => 'Заказать обратный звонок'])
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalImg">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <!-- Modal body -->
      <div class="p-3">
        <img src="" width="100%">
      </div>
    </div>
  </div>
</div>
