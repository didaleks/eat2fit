@extends('admin::layouts.admin_form')

@section('action', route($name . '.update', ['id' => $model->id]))

@section('controls')
    <button type="submit" class="btn btn-outline-primary"><i class="far fa-save"></i> Сохранить</button>
@endsection

@section('fields')
    @includeFirst(["admin.{$name}._fields", "admin::{$name}._fields", "admin::base._fields"])
@endsection

@section('additional')
    <div class="dd">
        <ol class="dd-list">
            @foreach($model->eatings->sortBy('eating_type.sort') as $eating)
                @include('admin.eating._row',
                ['model' => $eating,
                'name'=>'eating'])
            @endforeach
        </ol>
    </div>
    {{-- Кнопка доступна, если не все приемы пищи заполены --}}
    @unless($model->hasAllEatingTypes())
        {{-- Передаем сюда day.id чтобы при создании eating проставлялась связанная модель --}}
        <a href="{{route('eating.create',['day_id' => $model->id])}}" class="btn btn-outline-primary" role="button"
           aria-pressed="true"><i class="fas fa-plus"></i> Добавить прием пищи</a>
    @endunless
@endsection