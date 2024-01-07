@extends('template.app')
@push('auth-style')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}" />
@endpush

@section('content')
@yield('auth-content')
@endsection