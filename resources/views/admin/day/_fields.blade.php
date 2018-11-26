<div class="row">
    <div class="col-md-10">
        <div class="titles">
            <a href="{{route('diet.edit', ['id'=>$diet->id])}}"><p class="h3">Рацион "{{$diet->name}}"</p></a>
            <p class="h4">День №{{$number}}</p>
        </div>
        <input id="diet_id" type="input" class="form-control "
               name="diet_id"
               hidden
               value="{{$diet->id}}">

        <input id="number"
               hidden
               type="number" name="number"
               value="{{$number}}">
    </div>
    <div class="col-md-2">
        <div class="control-buttons">
            <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
        </div>
    </div>
</div>