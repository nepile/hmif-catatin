@extends('core.layouts.index')

@section('core-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>{{ $division }}</h4>
                <a href="{{ route('questions') }}" class="btn border border-dark mt-2">Back</a>
                @if(auth()->user()->division_id == $id)
                
                <a href="{{ route('show-create-question', $id) }}" class="btn bg-warning mt-2">Create Question</a>

                @endif
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
<div class="row my-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Points: {{ $maxPoint }}
            </div>
            <div class="card-body">
                @foreach ($questions as $q)
                <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-1">{{ $loop->iteration . '. ' . $q->question . ' (' . $q->max_point .'pt)'}}</p>
                
                    @if(auth()->user()->division_id == $id)

                    <div class="">
                        <button class="btn border-primary text-primary" data-bs-toggle="modal" data-bs-target="{{ '#edit'.$q->id }}" type="submit">Edit</button>

                        <div class="modal fade" id="{{ 'edit'.$q->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form method="POST" action="{{ route('update-question', $q->id) }}" class="modal-content">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="division_id" value="{{ $id }}">
                                    <input type="hidden" name="current_point" value="{{ $maxPoint }}">
                                    <div class="modal-body">
                                        <div class="my-2">    
                                            <textarea type="text" rows="6" class="form-control" name="question" placeholder="Questions" required>{{ $q->question }}</textarea>
                                        </div>
                                        <div class="my-2">    
                                            <input type="number" min="0" class="form-control" name="max_point" placeholder="Point" value="{{ $q->max_point }}" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn bg-info text-light">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        
                        <form class="d-inline" method="POST" action="{{ route('delete-question', $q->id) }}">
                            @csrf 
                            @method('DELETE') 
                            <button class="btn border-danger text-danger" type="submit">Delete</button>
                        </form>
                    </div>
                    @endif
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endif

@endsection