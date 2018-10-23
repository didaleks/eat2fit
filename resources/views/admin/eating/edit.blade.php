@extends('admin.layouts.admin_form')

@section('action', route($name . '.update', ['id' => $model->id]))

@section('controls')
    <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
@endsection

@section('fields')
    @includeFirst(["admin.{$name}._fields", "admin::{$name}._fields", "admin::base._fields"])

    {{--todo перенести этот блок в ui--}}
    <?php

    ?>
    <select multiple="multiple" id="dishes-select" name="dishes[]" data-ids="[]">
        @foreach($model->getDishesSorted() as $dish)
            <option value='{{$dish->id}}' {{in_array($dish->id,$model->getDishesIdsAttribute())? 'selected' : ''}}>{{$dish->name}}</option>
            {{--todo добавить selected если есть связь с dish c
            таким id и по selected на multiselect init добавить обновление данных--}}
        @endforeach
    </select>
    <input type="hidden" class="dishes-select-ids" name="dishes-select-ids" value="{{implode (",", $model->getDishesIdsAttribute())}}">
@endsection


