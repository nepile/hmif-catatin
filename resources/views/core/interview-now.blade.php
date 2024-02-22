@extends('core.layouts.index')

@section('core-content')
<div class="container">
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
    <div class="row mt-3 ">
        <div class="col-md-6">
            <form action="" method="POST" class="mx-2">
                @csrf
                <div class="question-input">
                    @foreach($questions as $question)
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="question" class="form-label">Pertanyaan</label>
                            <input type="text" class="form-control" name="question[]" placeholder="Silahkan Isi Pertanyaan" value="{{ $question->question }}" readonly >
                        </div>
                        <div class="col-md-6">
                            <label for="point" class="form-label">Nilai</label>
                            <input type="text" class="form-control" name="max_point[]" placeholder="Bobot" required>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button type="button" class="btn btn-primary mt-3" onclick="">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
