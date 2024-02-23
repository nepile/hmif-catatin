<div class="row mb-4">
    <div class="col-md-10">
        <div class="d-flex align-items-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="me-4" width="65" height="65" />
        
            <div class="mt-2">
                <h5 style="font-weight: bold">{{ auth()->user()->name }}</h5>
                <p>
                    {{ auth()->user()->role->name }} @if(auth()->user()->role->name == 'Coordinator') {{ auth()->user()->division->name }} @endif
                </p>
            </div>
        </div>
    </div>
    
    <!-- Buttons and Account Dropdown -->
    <div class="col-md-2 d-flex justify-content-start justify-content-lg-end align-items-center mb-4 mt-3 mb-lg-0 mt-lg-0">
        <div class="dropdown col-12">
            <button class="btn btn-outline-dark dropdown-toggle" type="button" style="width: 100%" id="accountDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="lni lni-user"></i> Account
            </button>
            <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                <li><a class="dropdown-item" href="/core/setting">Settings</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <form method="POST" action="{{ route('handle-logout') }}">
                    @csrf 
                    <button type="submit" class="dropdown-item" href="#">Logout</button>
                </form>
            </ul>
        </div>
    </div>
</div>