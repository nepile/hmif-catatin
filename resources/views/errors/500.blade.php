@extends('errors.layout.index')

@section('error-title')
<title>Error 500 | Internal Server Error</title>
@endsection

@section('error-content')
<div class="container-fluid d-flex align-items-center justify-content-center vh-100">
    <div class="row text-center">
        <div class="col-md-6">
            <div class="display-1 fw-bold px-5 mb-0">
                <img src="{{ asset('img/errors/error500-img.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-md-6 m-auto mt-5">
            <h1 class="fs-2 mt-5">Oops! Something Went Wrong</h1>
            <p class="lead">We are working to fix the issue. Please try again later.</p>
            <button class="btn button bg-primary text-white" onclick="history.back()">Back</button>
        </div>
    </div>
</div>
@endsection