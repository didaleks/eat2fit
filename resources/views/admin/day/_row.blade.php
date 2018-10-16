<li class="dd-item" data-id="{{ $model->id }}">
    <div class="dd-content">
        <div class="d-flex justify-content-between">
            <div>{{ $model->id }}</div>
            <div>{{ $model->diet_id }}</div>
            <div>{{ $model->number }}</div>
            <div>
                <a href="{{ route($name . '.edit', ['id' => $model->id]) }}"><i class="far fa-edit"></i></a>
                @component('admin::ui.form.delete', ['route' => route($name . '.destroy', ['id' => $model->id])])
                @endcomponent
            </div>
        </div>
    </div>
</li>