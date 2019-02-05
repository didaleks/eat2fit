@component('admin::ui.list.row', ['id' => $model->id, 'nestable' => true])
    <div class="p-0">ID {{ $model->id }}</div>
    <div class="pl-3">{{ $model->name }}</div>
    <div class="ml-auto p-0">
      <a href="{{ route($name . '.edit', ['id' => $model->id]) }}"><i class="far fa-edit"></i></a>
      <a href="{{ route($name . '.copy', ['id' => $model->id]) }}" class="ml-3 mr-3"><i class="far fa-copy"></i></a>
      @component('admin::ui.form.delete', ['route' => route($name . '.destroy', ['id' => $model->id])])
      @endcomponent
    </div>
@endcomponent