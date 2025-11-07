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
                [
                    'name'=>'Starter', 
                    'price'=>'$49', 
                    'original_price'=>'$147',
                    'duration'=>'per month', 
                    'features'=>[
                        'Max Trade Value: $2,500',
                        'AI Computation Fee: 10%',
                        'Ref AI Fee Shared: 5%'
                    ]
                ],
                [
                    'name'=>'Basic', 
                    'price'=>'$79', 
                    'original_price'=>'$237',
                    'duration'=>'per month', 
                    'features'=>[
                        'Max Trade Value: $5,000',
                        'AI Computation Fee: 12%',
                        'Ref AI Fee Shared: 6%'
                    ]
                ],
                [
                    'name'=>'Plus', 
                    'price'=>'$99', 
                    'original_price'=>'$297',
                    'duration'=>'per month', 
                    'features'=>[
                        'Max Trade Value: $10,000',
                        'AI Computation Fee: 15%',
                        'Ref AI Fee Shared: 7%'
                    ]
                ],
                [
                    'name'=>'Pro', 
                    'price'=>'$249', 
                    'original_price'=>'$747',
                    'duration'=>'per month', 
                    'features'=>[
                        'Max Trade Value: $25,000',
                        'AI Computation Fee: 20%',
                        'Ref AI Fee Shared: 10%'
                    ]
                ],
                [
                    'name'=>'Elite', 
                    'price'=>'$499', 
                    'original_price'=>'$1,497',
                    'duration'=>'per month', 
                    'features'=>[
                        'Max Trade Value: $100,000',
                        'AI Computation Fee: 25%',
                        'Ref AI Fee Shared: 12%'
                    ]
                ],
                [
                    'name'=>'Enterprise', 
                    'price'=>'$999', 
                    'original_price'=>'$2,997',
                    'duration'=>'per month', 
                    'features'=>[
                        'Max Trade Value: No Limit',
                        'AI Computation Fee: 25%',
                        'Ref AI Fee Shared: 12%'
                    ]
                ]
            ];
        @endphp

        @foreach ($plans as $plan)
        <div class="col-md-4 col-lg-2">
            <div class="card plan-card h-100 border-0 shadow-sm">
                <div class="card-body text-center">
                    <h6 class="fw-bold text-uppercase mb-1">{{ $plan['name'] }}</h6>
                    <h5 class="fw-bold text-primary">{{ $plan['price'] }}</h5>
                    <p class="text-muted small mb-1">{{ $plan['duration'] }}</p>
                    <p class="text-decoration-line-through text-muted small mb-3">
                        {{ $plan['original_price'] }} for 3 months
                    </p>
                    <hr>
                    <div class="text-start small mb-3">
                        <p class="fw-semibold mb-1">Key Features:</p>
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
                            <th>MEMBERSHIP</th>
                            <th>Starter $49</th>
                            <th>Basic $79</th>
                            <th>Plus $99</th>
                            <th>Pro $249</th>
                            <th>Elite $499</th>
                            <th>Enterprise $999</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PRICE (3 MONTHS)</td>
                            <td>$147.00</td>
                            <td>$237.00</td>
                            <td>$297.00</td>
                            <td>$747.00</td>
                            <td>$1,497.00</td>
                            <td>$2,997.00</td>
                        </tr>
                        <tr>
                            <td>MAX TRADE VALUE</td>
                            <td>$2,500.00</td>
                            <td>$5,000.00</td>
                            <td>$10,000.00</td>
                            <td>$25,000.00</td>
                            <td>$100,000.00</td>
                            <td>NO LIMIT</td>
                        </tr>
                        <tr>
                            <td>AI COMPUTATION FEE</td>
                            <td>10%</td>
                            <td>12%</td>
                            <td>15%</td>
                            <td>20%</td>
                            <td>25%</td>
                            <td>25%</td>
                        </tr>
                        <tr>
                            <td>REF AI FEE SHARED</td>
                            <td>5%</td>
                            <td>6%</td>
                            <td>7%</td>
                            <td>10%</td>
                            <td>12%</td>
                            <td>12%</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Member Compensation Plan Table --}}
            <h6 class="fw-semibold mb-3 mt-4">Member Compensation Plan</h6>
            <div class="table-responsive">
                <table class="table align-middle text-center small">
                    <thead class="table-light">
                        <tr>
                            <th>LEVEL</th>
                            <th>Starter</th>
                            <th>Basic</th>
                            <th>Plus</th>
                            <th>Pro</th>
                            <th>Elite</th>
                            <th>Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1st LEVEL</td>
                            <td>$22.05</td>
                            <td>$35.55</td>
                            <td>$44.55</td>
                            <td>$112.05</td>
                            <td>$224.55</td>
                            <td>$449.55</td>
                        </tr>
                        <tr>
                            <td>2nd LEVEL</td>
                            <td>$14.70</td>
                            <td>$23.70</td>
                            <td>$29.70</td>
                            <td>$74.70</td>
                            <td>$149.70</td>
                            <td>$299.70</td>
                        </tr>
                        <tr>
                            <td>3rd LEVEL</td>
                            <td>$14.70</td>
                            <td>$23.70</td>
                            <td>$29.70</td>
                            <td>$74.70</td>
                            <td>$149.70</td>
                            <td>$299.70</td>
                        </tr>
                        <tr>
                            <td>4th LEVEL</td>
                            <td>$14.70</td>
                            <td>$23.70</td>
                            <td>$29.70</td>
                            <td>$74.70</td>
                            <td>$149.70</td>
                            <td>$299.70</td>
                        </tr>
                        <tr>
                            <td>5th LEVEL</td>
                            <td>$7.35</td>
                            <td>$11.85</td>
                            <td>$14.85</td>
                            <td>$37.35</td>
                            <td>$823.35</td>
                            <td>$149.85</td>
                        </tr>
                        <tr class="table-active fw-bold">
                            <td>TOTAL</td>
                            <td>$73.50</td>
                            <td>$118.50</td>
                            <td>$148.50</td>
                            <td>$373.50</td>
                            <td>$1,497.00</td>
                            <td>$1,498.50</td>
                        </tr>
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
.table-active {
    background-color: rgba(0, 67, 168, 0.1);
}
</style>
@endpush