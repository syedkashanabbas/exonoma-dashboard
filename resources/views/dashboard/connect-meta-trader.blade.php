@extends('layouts.layout1')

@section('title', 'Connect New Meta Trader | Exonoma')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex align-items-center mb-3">
        <a href="#" class="text-decoration-none text-dark me-2"><i class="fas fa-arrow-left"></i></a>
        <h6 class="fw-bold mb-0">Integration / Create</h6>
    </div>

    <h5 class="fw-bold mb-3">Connect New Meta Trader Flow</h5>

    {{-- Banner --}}
    <div class="card border-0 mb-3 gradient-banner text-white">
        <div class="card-body p-4">
            <h6 class="fw-semibold mb-0">Hello, Connect your new Meta Trader Account</h6>
        </div>
    </div>

    {{-- Info Alert --}}
    <div class="alert alert-primary small">
        Your account needs to have at least <strong>1000 USD</strong> volume to be connected to a license.
    </div>

    {{-- Form Section --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <form>
                {{-- User Info --}}
                <h6 class="fw-semibold mb-3">User Info</h6>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label small mb-1">First Name</label>
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small mb-1">Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small mb-1">Email</label>
                        <input type="email" class="form-control" placeholder="info@heckta.it">
                    </div>
                </div>

                {{-- Broker Info --}}
                <h6 class="fw-semibold mb-3">Broker Account Info</h6>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label class="form-label small mb-1">Broker Name</label>
                        <input type="text" class="form-control" placeholder="Broker Name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small mb-1">Broker Server</label>
                        <input type="text" class="form-control" placeholder="Broker Server">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small mb-1">Platform</label><br>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary w-50 active">Meta Trader 4</button>
                            <button type="button" class="btn btn-outline-primary w-50">Meta Trader 5</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small mb-1">Account Type</label><br>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-primary w-50 active">Real</button>
                            <button type="button" class="btn btn-outline-primary w-50">Demo</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small mb-1">Account Number</label>
                        <input type="text" class="form-control" placeholder="Enter Account Number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small mb-1">Password</label>
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small mb-1">Leverage</label>
                        <input type="text" class="form-control" placeholder="1">
                    </div>
                </div>

                {{-- Connection Info --}}
                <h6 class="fw-semibold mb-3">Connection Info</h6>
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label small mb-1">Expected Trading Balance</label>
                        <input type="text" class="form-control" placeholder="Expected Trading Balance">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label small mb-1">License</label>
                        <select class="form-select">
                            <option>Select License</option>
                            <option>License 1</option>
                            <option>License 2</option>
                        </select>
                    </div>
                </div>

                <div class="form-check mt-3 mb-4">
                    <input class="form-check-input" type="checkbox" id="termsCheck">
                    <label class="form-check-label small" for="termsCheck">
                        I confirm and accept the <a href="#">Terms & Conditions</a> and the <a href="#">Risk Disclosure</a>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2">Add New Meta Trader</button>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.gradient-banner {
    background: linear-gradient(135deg, #001f3f, #003366, #004080);
    border-radius: 0.6rem;
}
.btn-primary {
    background: linear-gradient(135deg, #0043a8, #007bff);
    border: none;
}
.btn-primary:hover {
    background: linear-gradient(135deg, #003b95, #006ae0);
}
.btn-outline-primary.active {
    background: linear-gradient(135deg, #0043a8, #007bff);
    color: #fff;
    border: none;
}
.btn-outline-primary {
    border-color: #007bff;
    color: #007bff;
    transition: all 0.3s ease;
}
.btn-outline-primary:hover {
    background: linear-gradient(135deg, #0043a8, #007bff);
    color: #fff;
}
.form-label {
    font-weight: 500;
}
@media (max-width: 576px) {
    .form-control, .form-select {
        font-size: 0.9rem;
    }
    .gradient-banner h6 {
        font-size: 0.95rem;
    }
}
</style>
@endpush
