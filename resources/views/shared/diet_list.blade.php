<div class="row justify-content-sm-center offset-top-25 offset-md-top-40">
    @if(count($models))
        @foreach($models as $model)
            @include('shared.diet_item', ['model' => $model])
        @endforeach
    @else
        <h3>Рационов по Вашему запросу не нашлось</h3>
    @endif
</div>