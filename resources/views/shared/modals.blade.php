<!-- The Modal -->
<div class="modal fade" id="modalCallback">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="pr-3 pt-3">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="p-3">
        @include('blocks.footer_contact_form', ['type' => 'callback', 'heading' => ''])
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
