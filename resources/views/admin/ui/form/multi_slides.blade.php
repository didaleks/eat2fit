<div class="form-group">
  <h5>@include('admin::ui.form.label', ['label' => $label])</h5>

  <div class="multi">
    @foreach($value as $key => $item)

    <div class="item">
      @component('admin::ui.form.image', ['name' => 'fields[slides]['.$key.'][image]', 'label' => 'Картинка', 'value' => $item['image']])
      @endcomponent

      @component('admin::ui.form.input', ['name' => 'fields[slides]['.$key.'][text]', 'label' => 'Текст', 'value' => $item['text'] ?? ''])
      @endcomponent
    </div>
    @endforeach
  </div>
</div>