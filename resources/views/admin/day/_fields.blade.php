{{--todo скрыть инпут пока стоит для отладки--}}
<div class="row">
    <div class="col-md-10">
        <div class="titles">
            <a href="{{route('diet.edit', ['id'=>$diet->id])}}"><p class="h3">Рацион "{{$diet->name}}"</p></a>
            <p class="h4">День №{{$number}}</p>
        </div>

        <div class="form-group">
            <label for="diet_id" class="">
                Diet ID(для отладки, потом скрыть)
            </label>
            <input id="diet_id" type="input" class="form-control "
                   placeholder=""
                   name="diet_id"
                   readonly
                   required
                   value="{{$diet->id}}">

        </div>

        <div class="form-group">
            <label for="number" class="">
                Номер дня(для отладки, потом скрыть)
            </label>
            <input id="number"
                   readonly
                   required
                   type="number" class="form-control " placeholder="" name="number"
                   value="{{$number}}">

        </div>
    </div>
    <div class="col-md-2">
        <div class="control-buttons">
            <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
        </div>
    </div>
</div>