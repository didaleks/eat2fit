@extends('admin::layouts.admin_form')

@section('action', route($name . '.update', ['id' => $model->id]))

@section('controls')
    <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
@endsection

@section('fields')
    @includeFirst(["admin.{$name}._fields", "admin::{$name}._fields", "admin::base._fields"])


    <select multiple="multiple" id="my-select" name="my-select[]">
        <option value='elem_1'>elem 1</option>
        <option value='elem_2'>elem 2</option>
        <option value='elem_3'>elem 3</option>
        <option value='elem_4'>elem 4</option>
        <option value='elem_100'>elem 100</option>
    </select>
@endsection


