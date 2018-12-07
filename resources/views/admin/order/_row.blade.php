<li class="dd-item" data-id="{{ $model->id }}">
    <div class="dd-content">
        <div class="d-flex">
            <a href="{{ route($name . '.show', ['id' => $model->id]) }}">
            <span class="p-0">Заказ №{{ $model->id }} от {{ $model->created_at }}</span>
            </a>
        </div>
    </div>
</li>