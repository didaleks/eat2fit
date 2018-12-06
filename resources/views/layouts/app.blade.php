@extends('layouts.base')

@section('body')

    @include('blocks.header')

    @yield('content')

    @include('blocks.footer_contact_form')

    @include('blocks.footer')

    @include('blocks.js')

@endsection

