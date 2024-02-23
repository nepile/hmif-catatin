@extends('core.layouts.index')

@section('core-content')
<div class="container">
    <a href="{{ route('interview') }}" class="mb-3 px-4 btn border-dark">
        Back
    </a>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title pt-2">Interview</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p class="card-text"><strong>NIM:</strong> {{ $committee->nim }}</p>
                    <p class="card-text"><strong>Name:</strong> {{ $committee->full_name }}</p>
                    <p class="card-text"><strong>Gen:</strong> {{ $committee->gen }}</p>
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
    
    @else
    <form method="POST" action="{{ route('save-interview', $committee->id) }}" class="row my-4">
        @csrf
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Questions
                </div>
                <div class="card-body">
                    @foreach ($questions as $q)
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-1">{{ $loop->iteration . '. ' . $q->question . ' (' . $q->max_point .'pt)'}}</p>
                        
                        <div class="col-1">
                            <input type="hidden" name="question_id[]" value="{{ $q->id }}">
                            <select name="point[]" class="form-control" required>
                                @for($i = 0; $i <= 20; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
            <button class="mt-4 btn btn-dark px-3 mb-5">Submit</button>
        </div>

    </div>
    
    @endif
</div>
@endsection
