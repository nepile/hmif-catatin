@extends('core.layouts.index')

@section('core-content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 text-center mx-auto">
            <h5>Change Password</h5>
            <form method="POST" action="{{ route('update-password', ['id' => Auth::id()]) }}" class="modal-content">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    {{-- Update Password Form --}}
                    <div class="my-2 d-flex flex-column align-items-start">
                        <label class="mb-1" for="new_password">New Password</label>
                        <input type="password" id="new_password" class="form-control" name="new_password" placeholder="New Password" required>

                    </div>
                    <div class="my-2 d-flex flex-column align-items-start">
                        <label class="mb-1" for="confirm_new_password">Confirm New Password</label>
                        <input type="password" id="confirm_new_password" class="form-control" name="confirm_new_password" placeholder="Confirm New Password"  required>
                    </div>
                                  
                </div>
                <div class="modal-footer border-0 text-center mx-auto mt-2 mb-5">
                    <button type="submit" class="btn bg-favorite">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection