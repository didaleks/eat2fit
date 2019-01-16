@component('admin::ui.list.row', ['id' => $model->id, 'nestable' => true])
    <div>{{ $model->name }}</div>
    <div>
        <span class="ml-3"><i class="fas fa-eye{{ $model->published ? '' : '-slash' }}"></i></span>
        <a class="ml-3 mr-3" href="{{ route($name . '.edit', ['id' => $model->id]) }}"><i class="far fa-edit"></i></a>
        @component('admin::ui.form.delete', ['route' => route($name . '.destroy', ['id' => $model->id])])
        @endcomponent
    </div>
@endcomponent