@extends('core.layouts.index')

@section('core-content')
    {{-- <p>questions</p> --}}
    <div class="row justify-content-center">
    @foreach ($divisions as $division)
    <div class="col-lg-4">
        <div class="card mb-3 bg-dark text-white" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-5 align-items-center  p-4">
                    <img src="{{ asset('img/'.$division->name.'.png') }}" class="rounded-start" alt="division images">
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">{{$division->name}}</h5>
                    <p>{{ $division->event->name }}</p>
                    <a href="{{ route('detail-question', $division->id) }}" class="btn px-4 border border-light text-light">Detail</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    </div>
@endsection