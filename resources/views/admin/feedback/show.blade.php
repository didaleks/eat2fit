@extends('admin::layouts.admin_form')


@section('controls')
@endsection

@section('fields')

  <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">Поле</th>
      <th scope="col">Значение</th>
    </tr>
    </thead>
    <tbody>
    @foreach($model->getFillable() as $property)
      <tr>
        <th scope="row">{{$property}}</th>
        <td>{{$model->$property}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>


@endsection
