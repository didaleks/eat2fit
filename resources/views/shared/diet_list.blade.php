<div class="row justify-content-sm-center offset-top-25 offset-md-top-40">
    @foreach($models as $model)
        @include('shared.diet_item', ['model' => $model])
    @endforeach
</div>