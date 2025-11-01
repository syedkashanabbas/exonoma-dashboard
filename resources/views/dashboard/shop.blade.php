@extends('layouts.layout1')

@section('title', 'Shop | Exonoma')

@section('content')
<div class="container-fluid py-4">
    <h6 class="fw-bold mb-3">Shop</h6>

    {{-- Free Trial Box --}}
    <div class="card shadow-sm border-0 mb-4 free-trial-card">
        <div class="card-body d-flex flex-column flex-md-row justify-content-between align-items-md-center">
            <div>
                <h6 class="fw-semibold mb-1">Start Your 30-Day Free Trial with Enaria</h6>
                <p class="text-muted mb-2 small">
                    Completely free — no credit card, no prepayment. Just plug in and try it out.<br>
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

    {{-- Plan Tabs --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <ul class="nav nav-pills mb-2" id="planTabs">
            <li class="nav-item"><button class="nav-link active">3 Months</button></li>
            <li class="nav-item"><button class="nav-link">6 Months</button></li>
            <li class="nav-item"><button class="nav-link">12 Months</button></li>
        </ul>
        <select class="form-select w-auto">
            <option selected>Expected Trading Balance</option>
            <option>Any</option>
            <option>Up to 3000 USD</option>
            <option>10,000 USD</option>
        </select>
    </div>

    {{-- Pricing Cards --}}
    <div class="row g-3 mb-4">
        @php
            $plans = [
                ['name'=>'Starter', 'price'=>'$87', 'duration'=>'for 3 Months', 'features'=>['AI Autotrading: 100 USD','AI Copilot: 50 USD','AI Marketplace: 50 per month']],
                ['name'=>'Basic', 'price'=>'$147', 'duration'=>'for 3 Months', 'features'=>['AI Autotrading: 500 USD','AI Copilot: 150 USD','AI Marketplace: 50 per month']],
                ['name'=>'Plus', 'price'=>'$297', 'duration'=>'for 3 Months', 'features'=>['AI Autotrading: 1000 USD','AI Copilot: 250 USD','AI Marketplace: 100 per month']],
                ['name'=>'Pro', 'price'=>'$747', 'duration'=>'for 3 Months', 'features'=>['AI Autotrading: 3000 USD','AI Copilot: 500 USD','AI Marketplace: 200 per month']],
                ['name'=>'Elite', 'price'=>'$1497', 'duration'=>'for 3 Months', 'features'=>['AI Autotrading: 5000 USD','AI Copilot: 1000 USD','AI Marketplace: 300 per month']],
                ['name'=>'Enterprise', 'price'=>'$2997', 'duration'=>'for 3 Months', 'features'=>['AI Autotrading: Unlimited USD','AI Copilot: Unlimited USD','AI Marketplace: 400 per month']]
            ];
        @endphp

        @foreach ($plans as $plan)
        <div class="col-md-4 col-lg-2">
            <div class="card plan-card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <h6 class="fw-bold text-uppercase mb-1">{{ $plan['name'] }}</h6>
                    <h5 class="fw-bold">{{ $plan['price'] }}</h5>
                    <p class="text-muted small mb-3">{{ $plan['duration'] }}</p>
                    <hr>
                    <div class="text-start small mb-3">
                        <p class="fw-semibold mb-1">Key Features Included:</p>
                        <ul class="list-unstyled mb-2">
                            @foreach ($plan['features'] as $f)
                            <li><i class="fas fa-check text-primary me-1"></i>{{ $f }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <button class="btn btn-outline-primary w-100">Get Started</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Pricing Table --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h6 class="fw-semibold mb-3">Pricing & Advantages</h6>

            <div class="table-responsive">
                <table class="table align-middle text-center small">
                    <thead class="table-light">
                        <tr>
                            <th>Plan</th>
                            <th>Starter</th>
                            <th>Basic</th>
                            <th>Plus</th>
                            <th>Pro</th>
                            <th>Elite</th>
                            <th>Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Price (3 Months)</td><td>$87</td><td>$147</td><td>$297</td><td>$747</td><td>$1,497</td><td>$2,997</td></tr>
                        <tr><td>AI Autotrading</td><td>100 USD</td><td>500 USD</td><td>1000 USD</td><td>3000 USD</td><td>5000 USD</td><td>Unlimited</td></tr>
                        <tr><td>AI Copilot</td><td>50 USD</td><td>150 USD</td><td>250 USD</td><td>500 USD</td><td>1000 USD</td><td>Unlimited</td></tr>
                        <tr><td>Marketplace</td><td>$50/mo</td><td>$50/mo</td><td>$100/mo</td><td>$200/mo</td><td>$300/mo</td><td>$400/mo</td></tr>
                        <tr><td>Commission Reduction</td><td>10%</td><td>15%</td><td>20%</td><td>25%</td><td>30%</td><td>35%</td></tr>
                        <tr><td>AI Computation Level</td><td>Level 1</td><td>Level 2</td><td>Level 3</td><td>Level 4</td><td>Level 5</td><td>Level 6</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.free-trial-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(0,0,0,0.08);
}
.plan-card {
    border-radius: 0.6rem;
    transition: all 0.3s ease;
}
.plan-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rgba(0,0,0,0.1);
}
.plan-card .btn-outline-primary {
    border-color: #0043a8;
    color: #0043a8;
}
.plan-card .btn-outline-primary:hover {
    background: linear-gradient(135deg,#0043a8,#007bff);
    color: #fff;
}
.nav-pills .nav-link {
    border-radius: 50px;
    padding: 5px 15px;
    color: #444;
}
.nav-pills .nav-link.active {
    background: linear-gradient(135deg,#0043a8,#007bff);
}
</style>
@endpush
