@extends('layouts.base')

@section('body')

    @include('blocks.header')

    @yield('content')

    @include('blocks.footer')

    @include('shared.modals')

    @include('blocks.js')

@endsection

