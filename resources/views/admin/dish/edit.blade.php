@extends('admin::layouts.admin_form')

@section('action', route($name . '.update', ['id' => $model->id]))

@section('controls')
    <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
@endsection

@section('fields')
    @includeFirst(["admin.{$name}._fields", "admin::{$name}._fields", "admin::base._fields"])
@endsection

@section('additional')
    <h5>Это блюдо содержится в следующих рационах:</h5>
    <div class="dd">
        <ol class="dd-list">
            @foreach($model->diets() as $diet)
                @include("admin.diet._row", ['model' => $diet, 'name' => 'diet'])
            @endforeach
        </ol>
    </div>
@endsection