<select multiple="multiple" id="dishes-select" name="dishes[]" data-ids="[]">
    @foreach($model->getDishesSorted() as $dish)
        <option value='{{$dish->id}}' {{in_array($dish->id,$model->getDishesIdsAttribute())? 'selected' : ''}}>{{$dish->name}}</option>
    @endforeach
</select>
<input type="hidden" class="dishes-select-ids" name="dishes-select-ids" value="{{implode (",", $model->getDishesIdsAttribute())}}">