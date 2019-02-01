<h5>Относится к категориям: </h5>
@foreach($categories as $category)
    <div class="form-group row">
        <div class="col-md-10">
            {{ Form::checkbox('categories[]', $category->id, $model->hasCategory($category), ['class' => 'checkbox', 'id' => 'category_'.$category->id]) }}
            <label for="{{'category_'.$category->id}}">{{ $category->name }}</label>
        </div>
    </div>
@endforeach