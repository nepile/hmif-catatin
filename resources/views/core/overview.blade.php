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
                <h5 class="card-title">Balance</h5>
                <p class="card-text">Your current balance is $500.00</p>
                <button class="btn btn-dark">Withdraw</button>
            </div>
        </div>
    </div>
</div>
@endsection