@extends('core.layouts.index')

@section('core-content')
@if($query == false)
<div class="row">
    <div class="col-lg-12">
        <div class="card" style="border: none; box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
            <div class="card-body d-flex flex-column align-items-center">
                <img src="{{ asset('img/search.jpg') }}" height="200" alt="">
                
                <h5 class="mt-2 text-secondary">Search Committee Here!</h5>
                
                <form method="GET" action="{{ route('interview') }}" class="col-6 d-flex mb-4">    
                    <input type="text" class="form-control p-3 text-center" placeholder="Search NIM or name of committee" name="query" id="">
                    <button type="submit" class="btn btn-dark ms-2">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endif

@if(!$committees->isEmpty() && $query == true)
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th>#</th>
            <th>NIM</th>
            <th>Name</th>
            <th>Gen</th>
            <th>Manage</th>
        </thead>
        <tbody style="vertical-align: middle;">
            @foreach ($committees as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->nim }}</td>
                    <td>{{ $c->full_name }}</td>
                    <td>{{ $c->gen }}</td>
                    <td>
                        <a href="{{ route('interview.now', $c->id) }}" class="btn bg-favorite">Interview Now</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('interview') }}" class="mt-3 btn border-dark px-4">Back</a>
</div>
@endif

@if($query == true && $committees->isEmpty())
<div class="row justify-content-center mb-5">
    <div class="col-8" style="height: 70vh">
        <img src="{{ asset('img/empty.svg') }}" style="object-fit: contain; height: 100%; width: 100%;" alt="">
        <div class="text-center">
            <h5 class="text-secondary">Not found committee</h5>
            <a href="{{ route('interview') }}" class="btn btn-dark px-5">Back</a>
        </div>
    </div>
</div>
@endif
@endsection