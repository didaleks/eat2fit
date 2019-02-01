<li class="dd-item" data-id="{{ $model['id'] }}">
    <div class="dd-content">
        <div class="d-flex justify-content-between">
            <div>День №{{ $model['number'] }}</div>
            <div>
                @if(isset($model['id']) && $model['id'] != null)
                    <a href="{{ route( 'day.edit', ['id' => $model['id']]) }}"><i class="far fa-edit"></i></a>
                @else
                    @component('admin.ui.form.create_day_button',
                        [
                            'route' => route('day.store'),
                            'number' => $model['number'],
                            'diet_id' => $diet->id,
                            'diet'=>$diet
                        ]
                    )
                    @endcomponent
                @endif
            </div>
        </div>
    </div>
</li>