@extends('admin.layouts.admin_form')

@section('action', route($name . '.update', ['id' => $model->id]))

@section('controls')
    <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
@endsection

@section('fields')
    @includeFirst(["admin.{$name}._fields", "admin::{$name}._fields", "admin::base._fields"])

    @include('admin.ui.dishes_multiselect', ['model' => $model])
@endsection


