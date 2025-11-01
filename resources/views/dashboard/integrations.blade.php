@extends('layouts.layout1')

@section('title', 'Integration | Exonoma')

@section('content')
<div class="container-fluid py-4">
    <h6 class="fw-bold mb-3">Integration</h6>

    {{-- Free Trial Box --}}
    <div class="card shadow-sm border-0 mb-3 free-trial-card">
        <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-md-center">
            <div>
                <h6 class="fw-semibold mb-1">Start Your 30-Day Free Trial with Enaria</h6>
                <p class="text-muted mb-2 small">
                    Completely free — no credit card, no prepayment. Just log in and try it out.<br>
                    To start your 30-day free trial with Enaria, you need to complete your profile first.
                    We require a completed profile to make sure your account is secure and ready to go.
                    You can do it <a href="#" class="text-decoration-none fw-semibold">here</a>.
                </p>
            </div>
            <div class="text-end">
                <span class="badge bg-warning text-dark mb-2">Account limit of maximum 3000 USD applies.</span><br>
                <button class="btn btn-primary btn-sm px-4">Start Free Trial</button>
            </div>
        </div>
    </div>

    {{-- Integration Banner --}}
    <div class="card border-0 mb-4 gradient-banner text-white position-relative overflow-hidden">
        <div class="card-body d-flex justify-content-between align-items-center p-4 banner-inner">
            <div>
                <h6 class="fw-bold mb-1">Hello, Welcome in your Integration</h6>
                <p class="small mb-0">View and manage all your connected trading accounts here. Link your trading accounts to a license to unlock more features and start trading with ease.</p>
            </div>
            <button class="btn btn-outline-light btn-sm">Add New Meta Trader Account</button>
        </div>
    </div>

    {{-- Trade Accounts Section --}}
    <div class="card border-0 shadow-sm trade-card">
        <div class="card-body">
            <h6 class="fw-semibold mb-3">Your Trade Accounts</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="border rounded p-3 shadow-sm position-relative account-box">
                        <span class="badge bg-danger position-absolute end-0 me-3 mt-2">Offline</span>
                        <h6 class="fw-bold mb-3">Meta Trader 5</h6>
                        <p class="mb-1"><strong>Name:</strong> Daneyal Asghar</p>
                        <p class="mb-1"><strong>Broker:</strong> Puprime-demo</p>
                        <p class="mb-1"><strong>Account No:</strong> 700007015</p>
                        <p class="mb-1"><strong>Leverage:</strong> 1</p>
                        <p class="mb-1"><strong>Status:</strong> Not Connected</p>
                        <p class="mb-3"><strong>Connected Since:</strong> 17 Oct 2025</p>
                        <p class="mb-3"><strong>Connected To:</strong> —</p>
                        <button class="btn btn-primary w-100">Connect to a License</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Subtle gradient for the trial box */
.free-trial-card {
    transition: transform 0.2s ease, box-shadow 0.3s ease;
    border-radius: 0.6rem;
}
.free-trial-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
}

/* Smooth animated gradient banner */
.gradient-banner {
    background: linear-gradient(135deg, #001f3f, #003366, #004080);
    background-size: 200% 200%;
    animation: gradientShift 6s ease infinite;
    border-radius: 0.6rem;
}
@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Account box hover */
.account-box {
    transition: all 0.3s ease;
    background-color: #fff;
}
.account-box:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
}

/* Button and text enhancements */
.btn-primary {
    background: linear-gradient(135deg, #0052cc, #007bff);
    border: none;
}
.btn-primary:hover {
    background: linear-gradient(135deg, #004bb5, #006ae6);
}
</style>
@endpush
