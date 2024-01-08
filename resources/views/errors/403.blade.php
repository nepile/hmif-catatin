@extends('errors.layout.index')

@section('error-title')
<title>Error 403 | Forbidden</title>
@endsection

@section('error-content')
<div class=" content d-flex align-items-center justify-content-center vh-100">
    <div class="text-center">
        <div class="display-1 fw-bold px-5 mb-0">
            <img src="{{ asset('img/errors/error403-img.png') }}" alt="" class="img-fluid">
        </div>    
        <h1 style="margin-top: -20px;">Forbidden</h1>        
        <p class="lead">
            Access to this resource is denied
        </p>
        <button class="btn button bg-primary text-white" onclick="history.back()">Back</button>
    </div>
</div>
@endsection