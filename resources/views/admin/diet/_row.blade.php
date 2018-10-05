<li class="dd-item" data-id="{{ $model->id }}">
    <div class="dd-content">
        <div class="d-flex justify-content-between">
            <div>{{ $model->id }}</div>
            <div>{{ $model->name }}</div>
            <div>
                <a href="{{ route($name . '.edit', ['id' => $model->id]) }}"><i class="far fa-edit"></i></a>
                <a href="{{ route($name . '.copy', ['id' => $model->id]) }}" class="ml-3 mr-3"><i class="far fa-copy"></i></a>
                @component('admin::ui.form.delete', ['route' => route($name . '.destroy', ['id' => $model->id])])
                @endcomponent
            </div>
        </div>
    </div>
</li>