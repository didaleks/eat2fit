@extends('admin::layouts.admin_list')

@section('controls')
    <a class="btn btn-outline-primary" href="{{ route($name . '.create') }}"><i class="fas fa-plus"></i> Добавить</a>
@endsection

@section('links')
    {{ $models->links() }}
@endsection

@section('list')
    <li class="dd-item">
        <div class="dd-content">
            <div class="d-flex justify-content-between">
                <div>ID</div>
                <div>ID рациона</div>
                <div>Номер дня</div>
                <div></div>
            </div>
        </div>
    </li>
    @foreach ($models as $model)
        @includeFirst(["admin.{$name}._row", "admin::{$name}._row", "admin::base._row"])
    @endforeach
@endsection
