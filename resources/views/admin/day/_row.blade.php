<li class="dd-item" data-id="{{ $model['id'] }}">
    <div class="dd-content">
        <div class="d-flex justify-content-between">
            <div>День №{{ $model['number'] }}</div>
            <div>
                @if(isset($model['id']) && $model['id'] != null)
                    <a href="{{ route( 'day.edit', ['id' => $model['id']]) }}"><i class="far fa-edit"></i></a>
                @else
                    {{--передается на страницу создания дня, номер дня и id рациона --}}
                    <a href="{{ route( 'day.create', ['number' => $model['number'], 'diet_id' => $diet->id]) }}"><i class="fas fa-plus-circle"></i></a>
                @endif
            </div>
        </div>
    </div>
</li>