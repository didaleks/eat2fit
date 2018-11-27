@extends('layouts.base')

@section('body')

    @include('blocks.header')

    @include('blocks.alert')

    @yield('content')

    @include('blocks.footer')

    @include('blocks.modals')

    @include('blocks.js')

@endsection

