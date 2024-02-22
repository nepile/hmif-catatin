@extends('core.layouts.index')
@section('core-content')
    <div class="container">
        <div id="question-container" class="my-5">   
            <form action="{{ route('create-question') }}" method="POST">
                @csrf
                
                <input type="hidden" name="division_id" value="{{ $id }}">
                <div class="row question-input">
                    <div class="col-md-6 mb-3">
                        <label for="question" class="form-label">Pertanyaan</label>
                        <input type="text" class="form-control" name="question[]" placeholder="Silahkan Isi Pertanyaan" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="point" class="form-label">Bobot</label>
                        <input type="text" class="form-control" name="max_point[]" placeholder="Bobot" required>
                    </div>
                </div>
                <button type="button" class="btn btn-primary mt-3" onclick="addQuestion()">Tambah Pertanyaan</button>
                <button type="submit" class="btn btn-success mt-3">Simpan</button>
            </form>
        </div>
    </div>
@endsection
