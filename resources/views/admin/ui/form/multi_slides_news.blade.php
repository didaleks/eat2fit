<div class="form-group">
  <h5>@include('admin::ui.form.label', ['label' => $label])</h5>

  <div class="multi">

    @if(isset($value) && count($value))
      @foreach($value as $key => $item)
        <div class="item">
          @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][head]', 'label' => 'Заголовок слайда', 'value' => $item['head'] ?? ''])
          @endcomponent
          @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][date]', 'label' => 'Дата', 'value' => $item['date'] ?? ''])
          @endcomponent
          @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][text]', 'label' => 'Текст', 'value' => $item['text'] ?? ''])
          @endcomponent
          @component('admin::ui.form.image', ['name' => ''.$name.'['.$key.'][image]', 'label' => 'Фото', 'value' => $item['image']])
          @endcomponent
          @component('admin::ui.form.input', ['name' => ''.$name.'['.$key.'][link]', 'label' => 'Относительная ссылка например "/catalog"', 'value' => $item['link'] ?? ''])
          @endcomponent
        </div>
      @endforeach
    @else
      <div class="item">
        @component('admin::ui.form.input', ['name' => ''.$name.'[0][head]', 'label' => 'Заголовок слайда'])
        @endcomponent
        @component('admin::ui.form.input', ['name' => ''.$name.'[0][date]', 'label' => 'Дата'])
        @endcomponent
        @component('admin::ui.form.input', ['name' => ''.$name.'[0][text]', 'label' => 'Текст'])
        @endcomponent
        @component('admin::ui.form.image', ['name' => ''.$name.'[0][image]', 'label' => 'Фото'])
        @endcomponent
        @component('admin::ui.form.input', ['name' => ''.$name.'[0][link]', 'label' => 'Относительная ссылка например "/catalog"'])
        @endcomponent
      </div>
    @endif
  </div>
</div>