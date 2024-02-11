@extends('core.layouts.index')

@section('core-content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 text-center mx-auto">
            <h5>Personal Info</h5>
            <form method="POST" action="{{ route('update-user', ['id' => Auth::id()]) }}" class="modal-content">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    {{-- Update User Form --}}
                    <div class="my-2 d-flex flex-column align-items-start">
                        <label class="mb-1" for="full_name">Full Name</label>
                        <input type="text" id="full_name" class="form-control" name="name" placeholder="Full Name" value="{{ $user->name }}" required>
                    </div>
                
                    <div class="my-2 d-flex flex-column align-items-start">
                        <label class="mb-1" for="division_id">Division</label>
                        <select id="division_id" name="division_id" class="form-control">
                            @if ($user->division_id)
                                <option value="{{ $user->division_id }}" selected>{{ $user->division->name }}</option>
                            @else
                                <option value="" selected>Select Division</option>
                            @endif
                            @foreach ($divisions as $division)
                                @if ($user->division_id != $division->id)
                                    <option value="{{ $division->id }}">{{ $division->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    
                
                    <div class="my-2 d-flex flex-column align-items-start">
                        <label class="mb-1" for="nim">NIM</label>
                        <input type="text" id="nim" class="form-control" name="nim" placeholder="NIM" value="{{ $user->nim }}" required>
                    </div>
                
                    <div class="my-2 d-flex flex-column align-items-start">
                        <label class="mb-1" for="gen">Gen</label>
                        <select id="gen" name="gen" class="form-control">
                            <option value="{{ $user->gen }}" class="text-primary" selected disabled>{{ $user->gen }}</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    
                    <div class="my-1 d-flex flex-column align-items-start mt-3">
                        <p>Confirm New Password</p>
                        <a class="btn bg-favorite" href="/core/setting/newPass">Change Password</a>
                    </div>
                    
                </div>
                <div class="modal-footer border-0 text-center mx-auto mt-2 mb-5">
                    <button type="submit" class="btn bg-favorite">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
