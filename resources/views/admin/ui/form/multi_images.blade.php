<div class="form-group">
  <h5>@include('admin::ui.form.label', ['label' => $label])</h5>

  <div class="multi">
    @if(isset($value) && count($value))
      @foreach($value as $key => $item)
        <div class="item">
          @component('admin::ui.form.image', ['name' => ''.$name.'['.$key.'][image]', 'label' => 'Фото лицензии', 'value' => $item['image']])
          @endcomponent
        </div>
      @endforeach
    @else
      <div class="item">
        @component('admin::ui.form.image', ['name' => ''.$name.'[0][image]', 'label' => 'Фото лицензии'])
        @endcomponent
      </div>
    @endif
  </div>
</div>