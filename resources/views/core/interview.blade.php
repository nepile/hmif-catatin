@extends('core.layouts.index')

@section('core-content')
    <div class="row">
      <div class="col-lg-12">
        <div class="d-flex mb-4 justify-content-between align-items-center">
            <div class="col-lg-3 d-flex">
                <form method="GET" action="{{ route('interview') }}" class="d-flex">
                    <input type="text" class="form-control border-radius-none" name="query" placeholder="Search by nim or name" value="{{ $query ?? '' }}">
                    <button type="submit" class="btn btn-dark border-radius-none ms-2">Search</button>
                </form>
                
            </div>            
        </div>
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
                      
                        <a href="{{ route('interview.now', ['id' => $committee->id]) }}" class="btn btn-primary">Interview Now</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection