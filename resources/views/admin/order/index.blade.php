@extends('admin::layouts.admin_list')

@section('controls')
@endsection

@section('links')
    {{ $models->links() }}
@endsection

@section('list')
    <h3>Заказы</h3>
    @foreach ($models as $model)
        @includeFirst(["admin.{$name}._row", "admin::{$name}._row", "admin::base._row"])
    @endforeach
@endsection
