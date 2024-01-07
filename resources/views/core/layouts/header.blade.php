<div class="row mb-4">
    <!-- Logo -->
    <div class="col-md-6">
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="me-4" width="65" height="65" />
            
            <!-- Name Admin and Short Paragraph -->
            <div class="mt-2">
                <h5 style="font-weight: bold">{{ auth()->user()->name }}</h5>
                <p>
                    {{ auth()->user()->role->name }}
                </p>
            </div>
        </div>
    </div>
    
    <!-- Buttons and Account Dropdown -->
    <div class="col-md-6 d-flex justify-content-start justify-content-lg-end align-items-center mb-4 mt-2 mb-lg-0 mt-lg-0">
        <button class="btn btn-outline-dark me-2" style="height: 40px">
            <i class="lni lni-search d-none"></i> Search
        </button>
            
            
            <!-- Account Icon -->
        <div class="dropdown">
                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="accountDropdown"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="lni lni-user"></i> Account
            </button>
            <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                <li><a class="dropdown-item" href="#">Settings</a></li>
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