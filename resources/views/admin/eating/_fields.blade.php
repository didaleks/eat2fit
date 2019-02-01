<div class="row">
    <div class="col-md-10">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('diet.edit', ['id'=>$day->diet->id])}}">Рацион "{{$day->diet->name}}"</a></li>
                <li class="breadcrumb-item"><a href="{{route('day.edit', ['id'=>$day->id])}}">День №{{$day->number}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Редактирование приема пищи</li>
            </ol>
        </nav>
        {{--todo желательно include сделать--}}
        <div class="form-group">
            <label for="eating_type_id" class="">Тип приема пищи</label>
            <select id="eating_type_id" name="eating_type_id" class="form-control chosen-select" data-placeholder="">
                @foreach($day->dropDownEatingTypes($model) as $eating_type)
                    <option value="{{$eating_type->id}}" {{isset($model->eating_type)?$model->eating_type->id==$eating_type->id?'selected':'':''}}>{{$eating_type->name}}</option>
                @endforeach
            </select>
        </div>
            <input id="day_id" type="input" class="form-control " hidden name="day_id"
                   value="{{$model->day->id??$day->id}}">
    </div>
</div>