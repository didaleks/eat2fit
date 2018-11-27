@extends('layouts.base')

@section('body')

    @include('blocks.header')

    @yield('content')

    @include('blocks.footer')

    @include('blocks.js')

@endsection

