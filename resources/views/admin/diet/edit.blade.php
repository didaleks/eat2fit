@extends('admin::layouts.admin_form')

@section('action', route($name . '.update', ['id' => $model->id]))

@section('controls')
    <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
@endsection

@section('fields')
    @includeFirst(["admin.{$name}._fields", "admin::{$name}._fields", "admin::base._fields"])
@endsection


@for ($i=1;$i<=$model->days_count;$i++){
    @include("admin.day._row")
@endfor
{{--todo добавить вывод ссылок на создание/редактирование дней соответсвенно количеству--}}