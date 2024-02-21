@extends('core.layouts.index')

@section('core-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>{{ $division }}</h4>
                <a href="{{ route('questions') }}" class="btn border border-dark mt-2">Back</a>
                <button class="btn bg-warning mt-2" data-bs-toggle="modal" data-bs-target="#create">Create Question</button>
            </div>
        </div>
    </div>
</div>

@if ($questions->isEmpty())
<div class="row justify-content-center">
    <div class="col-8" style="height: 70vh">
        <img src="{{ asset('img/empty.svg') }}" style="object-fit: contain; height: 100%; width: 100%;" alt="">
    </div>
</div>
@endif
@endsection