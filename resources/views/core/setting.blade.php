@extends('core.layouts.index')

@section('core-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 mx-auto">
            <h5>Personal Info</h5>
            <form method="POST" action="{{ route('update-user', auth()->user()->id) }}" class="modal-content">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    {{-- Update User Form --}}
                    <div class="my-2 d-flex flex-column align-items-start">
                        <label class="mb-1" for="full_name">Full Name</label>
                        <input type="text" id="full_name" class="form-control @error('full_name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ $user->name }}">
                        @error('full_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <div class="my-2 d-flex flex-column align-items-start">
                        <label class="mb-1" for="nim">NIM</label>
                        <input type="text" id="nim" class="form-control @error('nim') is-invalid @enderror" name="nim" placeholder="NIM" value="{{ $user->nim }}">
                        @error('nim')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                
                    <div class="my-2 d-flex flex-column align-items-start">
                        <label class="mb-1" for="gen">Gen</label>
                        <select id="gen" name="gen" class="form-control @error('gen') is-invalid @enderror">
                            <option value="{{ $user->gen }}" class="text-primary" selected>{{ $user->gen }}</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                        @error('gen')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <div class="my-1 mt-3">
                        <button type="submit" class="btn bg-favorite">Update</button>
                        <a class="btn border border-dark" href="{{ route('newPass') }}">Change Password</a>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
