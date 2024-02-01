@extends('core.layouts.index')

@section('core-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4>Coordinators Management</h4>
                <p>
                    This menu is collect for all data of the person in charge of the division
                </p>
                <button class="btn bg-favorite mt-2" data-bs-toggle="modal" data-bs-target="#create">Create Coordinator</button>
                <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form method="POST" action="{{ route('create-coordinator') }}" class="modal-content">
                            @csrf
                            <div class="modal-body">
                                <div class="my-2">    
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                                <div class="my-2">    
                                    <input type="text" class="form-control" name="nim" placeholder="NIM" required>
                                </div>
                                <div class="my-2">    
                                    <select name="division_id" required class="form-control">
                                        <option value="">Select Division</option>
                                        @foreach ($divisions as $division)
                                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                                        @endforeach
                                    </select>
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
            </div>
        </div>
    </div>
</div>

<div class="row my-4">
    <div class="col-12">
        <form action="{{ route('search-coordinator') }}" method="GET" class="col-lg-3 col-12 d-flex mb-4 justify-content-between align-items-center">
            <input required type="text" class="form-control border-radius-none" name="query" placeholder="Search by name" id="">
            <button type="submit" class="btn btn-dark border-radius-none">Search</button>
            @if (request()->routeIs('search-coordinator'))
            <a href="{{ route('coordinator') }}" type="button" class="btn btn-dark border-radius-none ms-2">Back</a>
            @endif
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Division</th>
                        <th>Gen</th>
                        <th>Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coors as $coor) 
                    <tr>
                        <td>{{ $loop->iteration . '.' }}</td>
                        <td>{{ $coor->nim }}</td>
                        <td>{{ $coor->name }}</td>
                        <td>{{ $coor->role->name}}</td>
                        <td>{{ $coor->division->name}}</td>
                        <td>{{ $coor->gen }}</td>
                        <td>
                            {{-- update modal --}}
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="{{ '#update'.$coor->id }}"><i class="lni lni-cog"></i></button>
                            <div class="modal fade" id="{{ 'update'.$coor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form method="POST" action="{{ route('update-coordinator', $coor->id) }}" class="modal-content">
                                        @method('PUT')
                                        @csrf
                                        <div class="modal-body">
                                            <div class="my-2">    
                                                <input type="text" value="{{ $coor->name }}" class="form-control" name="name" placeholder="Name" required>
                                            </div>
                                            <div class="my-2">    
                                                <input type="text" value="{{ $coor->nim }}" class="form-control" name="nim" placeholder="NIM" required>
                                            </div>
                                            <div class="my-2">    
                                                <select name="division_id" required class="form-control">
                                                    <option value="{{ $coor->division_id }}" class="text-primary">{{ $coor->division->name }}</option>
                                                    @foreach ($divisions as $division)
                                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="my-2">    
                                                <select name="gen" required class="form-control">
                                                    <option value="{{ $coor->gen }}" class="text-primary">{{ $coor->gen }}</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer border-0">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn bg-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            {{-- Delete Modal --}}
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="{{ '#delete'.$coor->id }}">
                                <i class="lni lni-eraser"></i>
                            </button>
                            <div class="modal fade" id="{{ 'delete'.$coor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form method="POST" action="{{ route('delete-coordinator', $coor->id) }}" class="modal-content">
                                        @method('DELETE')
                                        @csrf
                                        <div class="modal-body">
                                            <p>Are you sure to delete <strong>{{ $coor->name }} ({{ $coor->nim }})</strong>?</p>
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
        

        <div class="d-flex justify-content-between">
            @if (!$coors->isEmpty())
                
            <p>Showing {{ $coors->firstItem() }} to {{ $coors->lastItem() }} of {{ $coors->total() }} entries</p>
            {{ $coors->links() }}
            @endif
        </div>

    </div>
</div>
@endsection