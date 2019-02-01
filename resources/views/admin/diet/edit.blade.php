@extends('admin::layouts.admin_form')

@section('action', route($name . '.update', ['id' => $model->id]))

@section('controls')
    <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
@endsection

@section('fields')
    @includeFirst(["admin.{$name}._fields", "admin.base._fields", "admin::{$name}._fields", "admin::base._fields"])
    @include('admin.diet._categories')
@endsection


@section('additional')
    <div class="dd">
        <ol class="dd-list">
            @foreach($model->daysList() as $day_item)
                @include("admin.day._row", ['model' => $day_item, 'diet' => $model])
            @endforeach
        </ol>
    </div>
@endsection