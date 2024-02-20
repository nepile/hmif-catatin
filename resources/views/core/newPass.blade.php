@extends('core.layouts.index')

@section('core-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h5>Change Password</h5>
            <form method="POST" action="{{ route('update-password', auth()->user()->id) }}" class="modal-content">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    {{-- Update Password Form --}}
                    <div class="my-3 d-flex flex-column align-items-start">
                        <input type="password" id="current_password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" placeholder="Current Password">
                        @error('current_password')
                            <small class="text-danger text-sm">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="my-3 d-flex flex-column align-items-start">
                        <input type="password" id="new_password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" placeholder="New Password">
                        @error('new_password')
                            <small class="text-danger text-sm">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="my-3 d-flex flex-column align-items-start">
                        <input type="password" id="confirm_new_password" class="form-control @error('confirm_new_password') is-invalid @enderror" name="confirm_new_password" placeholder="Confirm New Password" >
                        @error('confirm_new_password')
                            <small class="text-danger text-sm">{{ $message }}</small>
                        @enderror
                    </div>
                                  
                </div>
                <div class="mt-3">
                    <a href="{{ route('setting') }}" type="button" class="btn border border-dark px-4 py-2">Back</a>
                    <button type="submit" class="btn px-4 py-2 me-2 bg-favorite">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection