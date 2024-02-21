@extends('core.layouts.index')

@section('core-content')
<div class="row">
    <div class="col-12">
        <div class="d-flex mb-4 justify-content-between align-items-center">
            <div class="col-lg-9">
                {{-- <button class="btn bg-favorite">Import Data</button> --}}
                <button class="btn bg-favorite" data-bs-toggle="modal" data-bs-target="#create-committee">Create Committee</button>
            </div>
            <div class="col-lg-3 d-flex">
                <form method="GET" action="{{ route('show-committee') }}" class="d-flex">
                    <input type="text" class="form-control border-radius-none" name="query" placeholder="Search by nim" id="">
                    <button type="submit" class="btn btn-dark border-radius-none ms-2">Search</button>
                </form>
            </div>            
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Gen</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($committees as $key => $committee)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $committee->nim }}</td>
                        <td>{{ $committee->full_name }}</td>
                        <td>{{ $committee->gen }}</td>
                        <td>

                        {{-- Committee Update Modal --}}
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#update-committee{{ $key + 1 }}">
                            <i class="lni lni-cog"></i>
                        </button>
                        <div class="modal fade" id="update-committee{{ $key + 1 }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <form method="POST" action="{{ route('update-committee', ['id' => $committee->id]) }}" class="modal-content">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal-body">
                                        {{-- Update Committee Form --}}
                                        <div class="my-2">
                                            <input type="text" value="{{ $committee->full_name }}" class="form-control" name="full_name" placeholder="Full Name" required>
                                        </div>
                                     
                                        <div class="my-2">
                                            <input type="text" value="{{ $committee->nim }}" class="form-control" name="nim" placeholder="NIM" required>
                                        </div>
                                       
                                        <div class="my-2">
                                            <select name="gen" required class="form-control">
                                                <option value="{{ $committee->gen }}" class="text-primary">{{ $committee->gen }}</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn bg-favorite">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- Committee Delete Modal --}}
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete-committee{{ $key + 1 }}">
                                <i class="lni lni-eraser"></i>
                            </button>
                            <div class="modal fade" id="delete-committee{{ $key + 1 }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form method="POST" action="{{ route('delete-committee', ['id' => $committee->id]) }}" class="modal-content">
                                        
                                        @method('DELETE')
                                        @csrf
                                        <div class="modal-body">
                                            <p>Are you sure you want to delete this committee?</p>
                                        </div>
                                        <div class="modal-footer border-0">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Create Committee Modal -->
<div class="modal fade" id="create-committee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('create-committee') }}" class="modal-content">
            @csrf
            <div class="modal-body">
                <div class="my-2">    
                    <input type="text" class="form-control" name="full_name" placeholder="Full Name" required>
                </div>
             
                <div class="my-2">    
                    <input type="text" class="form-control" name="nim" placeholder="NIM" required>
                </div>
                
                <div class="my-2">    
                    <select name="gen" required class="form-control">
                        <option value="">Select Gen</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn bg-favorite">Save</button>
            </div>
        </form>
    </div>
</div>


@endsection
