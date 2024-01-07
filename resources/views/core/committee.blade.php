@extends('core.layouts.index')

@section('core-content')
<div class="row">
    <div class="col-12 table-responsive">
        <div class="d-flex mb-4 justify-content-between align-items-center">
            <div class="col-lg-9">
                <button class="btn bg-favorite">Import Data</button>
                <button class="btn bg-favorite">Create Committee</button>
            </div>
            <div class="col-lg-3 d-flex">
                <input type="text" class="form-control border-radius-none" name="" placeholder="Search by nim" id="">
                <button class="btn btn-dark border-radius-none">Search</button>
            </div>
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