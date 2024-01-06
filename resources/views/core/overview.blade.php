@extends('core.layouts.index')

@section('core-content')
<div class="row">
    <!-- Logo -->
    <div class="col-md-6">
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="me-4" width="65" height="65" />
            
            <!-- Name Admin and Short Paragraph -->
            <div class="mt-2">
                <h1>NAMA ADMIN</h1>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. ...
                </p>
            </div>
        </div>
    </div>
    
    <!-- Buttons and Account Dropdown -->
    <div class="col-md-6 d-flex justify-content-end">
        <!-- Search Button -->
        <button class="btn btn-outline-dark me-2" style="height: 40px">
            <i class="lni lni-search d-none"></i> Search
        </button>
        
        <!-- Notification Button -->
        <button class="btn btn-outline-dark me-2" style="height: 40px">
            <i class="lni lni-alarm"></i> Notification
        </button>
        
        <!-- Account Icon -->
        <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" id="accountDropdown"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="lni lni-user"></i> Account
        </button>
        <ul class="dropdown-menu" aria-labelledby="accountDropdown">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li>
                <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
        </ul>
    </div>
</div>
</div>

<!-- Charts -->
<div class="mt-4">
    <div class="row">
        <!-- Line Chart -->
        <div class="col-md-6">
            <div style="width: 100%">
                <canvas id="lineChart"></canvas>
            </div>
            <div class="d-flex mt-3 justify-content-center">
                <div class="d-flex mt-3 justify-content-center">
                    <div class="me-5 text-center">
                        <h5>Jumlah Peserta</h5>
                        <p>42</p>
                    </div>
                    <div class="me-5 text-center">
                        <h5>Jumlah Peserta</h5>
                        <p>42</p>
                    </div>
                    <div class="me-5 text-center">
                        <h5>Jumlah Peserta</h5>
                        <p>42</p>
                    </div>
                    <div class="me-5 text-center">
                        <h5>Jumlah Peserta</h5>
                        <p>42</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bar Chart -->
        <div class="col-md-6 mt-4 mt-md-0">
            <div style="width: 100%">
                <canvas id="barChart"></canvas>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="card-title">Balance</h5>
                    <p class="card-text">Your current balance is $500.00</p>
                    <button class="btn btn-dark">Withdraw</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection