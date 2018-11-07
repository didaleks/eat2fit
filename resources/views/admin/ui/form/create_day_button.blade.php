<form action="{{ $route }}" class="delete-form" method="POST">
    @method('POST')
    {{ csrf_field() }}
        <input id="diet_id" type="hidden" class="form-control "

               name="diet_id"

               value="{{$diet->id}}">
        <input id="number" type="hidden" class="form-control " placeholder="" name="number"
               value="{{$number}}">
    @component('admin::ui.form.button', ['type' => 'submit', 'class' => 'btn btn-link'])
        <i class="fas fa-plus-circle"></i>
    @endcomponent
</form>