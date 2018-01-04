{{--블레이드 주석안에서 {{ $name }}을(를)출력합니다.--}}
@extends('layouts.master')

@section('style')
    <style>
        body {
            background: green; color:white;}
    </style>
@endsection

@section('content')
    @include('partials.footer')
@endsection

@section('script')

    <script>
        alert("자식뷰");
    </script>
@endsection


