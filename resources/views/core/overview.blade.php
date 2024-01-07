@extends('core.layouts.index')

@section('core-content')
<div class="row">
    <div class="col-md-6">
        <div style="width: 100%">
            <canvas id="lineChart"></canvas>
        </div>
    </div>
    
    <div class="col-md-6">
        <div style="width: 100%">
            <canvas id="barChart"></canvas>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Catatin Interview</h5>
                <p class="card-text">Make it easier to summarize for committee selection!</p>
                <a href="{{ route('interview') }}" class="btn btn-dark">Interview Now</a>
            </div>
        </div>
    </div>
</div>

@endsection