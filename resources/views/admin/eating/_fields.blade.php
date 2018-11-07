<div class="row">
    <div class="col-md-10">
        <div class="titles">
            <a href="{{route('diet.edit', ['id'=>$day->diet->id])}}"><p class="h3">Рацион "{{$day->diet->name}}"</p></a>
            <a href="{{route('day.edit', ['id'=>$day->id])}}"><p class="h4">День №{{$day->number}}</p></a>
        </div>
        {{--todo желательно include сделать--}}
        <div class="form-group">
            <label for="eating_type_id" class="">Тип приема пищи</label>
            <select id="eating_type_id" name="eating_type_id" class="form-control chosen-select" data-placeholder="">
                @foreach($day->dropDownEatingTypes($model) as $eating_type)
                    <option value="{{$eating_type->id}}" {{isset($model->eating_type)?$model->eating_type->id==$eating_type->id?'selected':'':''}}>{{$eating_type->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="day_id" class="">
                ID дня
            </label>
            <input id="day_id" type="input" class="form-control " placeholder="" name="day_id"
                   value="{{$model->day->id??$day->id}}" readonly>
            {{--todo скрыть инпут пока стоит для отладки--}}
        </div>
    </div>
</div>