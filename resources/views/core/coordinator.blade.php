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
                <button class="btn bg-favorite mt-2">Create Coordinator</button>
            </div>
        </div>
    </div>
</div>

<div class="row my-4">
    <div class="col-12 table-responsive">
        <div class="col-lg-3 col-12 d-flex mb-4 justify-content-between align-items-center">
            <input type="text" class="form-control border-radius-none" name="" placeholder="Search by nim" id="">
            <button class="btn btn-dark border-radius-none">Search</button>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Name</th>
                    <th>Division</th>
                    <th>Gen</th>
                    <th>Manage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>No.</td>
                    <td>NIM</td>
                    <td>Name</td>
                    <td>Division</td>
                    <td>Gen</td>
                    <td>Manage</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection