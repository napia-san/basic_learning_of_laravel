@extends('test.layout')

{{-- main content --}}
@section('contets')

    email：{{ $datum['email'] }}<br>
    パスワード：{{ $datum['password'] }}<br>
@endsection