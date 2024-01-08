@extends('errors.layout.index')

@section('error-title')
<title>Error 400 | Bad Request</title>
@endsection

@section('error-content')
<div class="content d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <div class="display-1 fw-bold px-5 mb-0">
            <img src="{{ asset('img/errors/error400-img.png') }}" alt="" class="img-fluid">
        </div>
        <h1 style="margin-top: -20px;">Opps! Page Not Found</h1>
        <p class="lead">
            The page you’re looking for doesn’t exist.
        </p>
        <button class="btn button bg-primary text-white" onclick="history.back()">Back</button>
    </div>
</div>
@endsection