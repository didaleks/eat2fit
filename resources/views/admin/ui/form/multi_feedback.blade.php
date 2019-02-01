<div class="form-group">
  <h5>@include('admin::ui.form.label', ['label' => $label])</h5>

  <div class="multi">

    @if(isset($value) && count($value))
      @foreach($value as $key => $item)
        <div class="item">
          @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][head]', 'label' => 'Заголовок слайда', 'value' => $item['head'] ?? ''])
          @endcomponent
          @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][text]', 'label' => 'Текст', 'value' => $item['text'] ?? ''])
          @endcomponent
          @component('admin::ui.form.image', ['name' => ''.$name.'['.$key.'][image]', 'label' => 'Фото', 'value' => $item['image']])
          @endcomponent
          @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][name]', 'label' => 'Имя', 'value' => $item['name'] ?? ''])
          @endcomponent
          @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][position]', 'label' => 'Должность', 'value' => $item['position'] ?? ''])
          @endcomponent
        </div>
      @endforeach
    @else
      <div class="item">
        @component('admin::ui.form.input', ['name' => ''.$name.'[0][head]', 'label' => 'Заголовок слайда'])
        @endcomponent
        @component('admin::ui.form.input', ['name' => ''.$name.'[0][text]', 'label' => 'Текст'])
        @endcomponent
        @component('admin::ui.form.image', ['name' => ''.$name.'[0][image]', 'label' => 'Фото'])
        @endcomponent
        @component('admin::ui.form.input', ['name' => ''.$name.'[0][name]', 'label' => 'Имя'])
        @endcomponent
        @component('admin::ui.form.input', ['name' => ''.$name.'[0][position]', 'label' => 'Должность'])
        @endcomponent
      </div>
    @endif
  </div>
</div>