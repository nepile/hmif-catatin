@extends('core.layouts.index')
@section('core-content')
@if($maxPoint != 100)
<div class="container">
    <div id="question-container" class="my-5">   
        <form action="{{ route('create-question') }}" method="POST">
            @csrf
            <input type="hidden" name="cPoint" value="{{ $maxPoint }}">
            <input type="hidden" name="division_id" value="{{ $id }}">
            <div class="row question-input">
                <div class="col-md-10 mb-3">
                    <label for="question" class="form-label">Pertanyaan</label>
                    <textarea type="text" class="form-control" name="question[]" placeholder="Silahkan Isi Pertanyaan" rows="6" required></textarea>
                </div>
                <div class="col-md-2 mb-3">
                    <label for="point" class="form-label">Bobot</label>
                    <input type="number" min="0" class="form-control" name="max_point[]" placeholder="Bobot" required>
                </div>
            </div>
            
            <div class="my-2">
                <a href="{{ route('detail-question', $id) }}" class="btn btn-dark">Back</a>
                <button type="button" class="btn btn-primary" onclick="addQuestion()">Add Question</button>
                <button type="submit" class="btn btn-success">Save</button>    
            </div>
        </form>
    </div>
</div>

@else
<div class="row justify-content-center">
    <div class="col-8 d-flex flex-column justify-content-center" style="height: 70vh">
        <img src="{{ asset('img/oksip.svg') }}" style="object-fit: contain; height: 100%; width: 100%;" alt="">
        <p class="text-center text-secondary">The points weight is already 100</p>

        <a href="{{ route('detail-question', $id) }}" class="btn border border-dark">Back</a>
    </div>
</div>
@endif

@endsection
