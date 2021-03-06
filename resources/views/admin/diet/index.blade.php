@extends('admin::layouts.admin_tree')

@section('controls')
    <a class="btn btn-outline-primary" href="{{ route($name . '.create') }}"><i class="fas fa-plus"></i> Добавить</a>
@endsection

@section('h1')
    Рационы
@endsection

@section('links')
    {{ $models->links() }}
@endsection

@section('list')
    @foreach ($models as $model)
        @includeFirst(["admin.{$name}._row", "admin::{$name}._row", "admin::base._row"])
    @endforeach
@endsection

@section('h1')
    @lang('Diets')
@endsection