<div class="form-group">
  <h5>@include('admin::ui.form.label', ['label' => $label])</h5>

  <div class="">
    @foreach([1,2,3] as $key)
      <big><strong>План {{$key}}</strong></big>
      <div class="item">
        @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][head]', 'label' => 'Заголовок слайда', 'value' => $value[$key]['head'] ?? ''])
        @endcomponent
        @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][text]', 'label' => 'Текст', 'value' => $value[$key]['text'] ?? ''])
        @endcomponent
        @component('admin::ui.form.image', ['name' => ''.$name.'['.$key.'][image]', 'label' => 'Фото', 'value' => $value[$key]['image'] ?? ''])
        @endcomponent
        @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][link]', 'label' => 'Относительная ссылка например "/catalog"', 'value' => $value[$key]['link'] ?? ''])
        @endcomponent
      </div>
    @endforeach
  </div>
</div>