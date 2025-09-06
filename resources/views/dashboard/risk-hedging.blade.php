@extends('layouts.layout1')

@section('title', 'Transactions History')

@section('content')
<style>
    .card {
        border-radius: 16px;
        background: rgba(255,255,255,0.9);
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    .card:hover { transform: translateY(-4px); box-shadow: 0 12px 28px rgba(0,0,0,0.1); }
    .card h3, .card-header h6 {
        background: linear-gradient(90deg,#0d6efd,#6610f2);
        -webkit-background-clip: text; -webkit-text-fill-color: transparent;
    }
    .stat-card h3 { font-weight: 800; font-size: 1.8rem; }
    .table thead th { background: linear-gradient(90deg,#f8f9fa,#eef1f8); border: none; font-weight: 600; }
    .table-hover tbody tr:hover { background: rgba(13,110,253,0.08); transform: scale(1.01); transition:0.2s; }
    .chart-card { position: relative; overflow: hidden; }
    .chart-card::before {
        content: ""; position: absolute; top:-50%; left:-50%; width:200%; height:200%;
        background: conic-gradient(from 180deg,#0d6efd,#6610f2,#0dcaf0,#0d6efd);
        animation: rotate 12s linear infinite; opacity:0.05;
    }
    @keyframes rotate {100%{transform:rotate(360deg)}}
</style>

<div class="py-4 container-fluid">

    <!-- Header -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-bold">Transactions History</h2>
            <p class="text-muted">Deposits, withdrawals, trades, and plan renewals</p>
        </div>
        <button class="shadow-sm btn btn-primary">
            <i class="fas fa-download me-2"></i> Export History
        </button>
    </div>

    <!-- Stats -->
    <div class="mb-4 row g-4">
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Total Deposits</h6><h3 class="text-success">$45,200</h3><small>last 30 days</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Total Withdrawals</h6><h3 class="text-danger">$12,800</h3><small>last 30 days</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Total Trades</h6><h3 class="text-primary">324</h3><small>executed</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Plan Renewals</h6><h3 class="text-warning">18</h3><small>this month</small></div></div>
    </div>

    <!-- Transactions Table -->
    <div class="mb-4 shadow-sm card">
        <div class="bg-white border-0 card-header d-flex justify-content-between align-items-center">
            <h6 class="mb-0 fw-bold">All Transactions</h6>
            <input type="text" class="form-control form-control-sm w-25" placeholder="Search...">
        </div>
        <div class="card-body">
            <table class="table align-middle table-hover">
                <thead><tr><th>Date</th><th>Type</th><th>Amount</th><th>Status</th></tr></thead>
                <tbody>
                    <tr><td>Sep 5, 2025</td><td><span class="badge bg-success">Deposit</span></td><td>$5,000</td><td><span class="badge bg-success">Completed</span></td></tr>
                    <tr><td>Sep 3, 2025</td><td><span class="badge bg-primary">Trade</span></td><td>$1,200</td><td><span class="badge bg-primary">Executed</span></td></tr>
                    <tr><td>Aug 30, 2025</td><td><span class="badge bg-danger">Withdrawal</span></td><td>$800</td><td><span class="badge bg-warning text-dark">Pending</span></td></tr>
                    <tr><td>Aug 25, 2025</td><td><span class="badge bg-warning">Renewal</span></td><td>$2,500</td><td><span class="badge bg-success">Processed</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="mb-4 row g-4">
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Deposits vs Withdrawals</h6></div>
            <div class="card-body"><canvas id="depositWithdrawChart" height="200"></canvas></div>
        </div></div>
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Trade Volume Trend</h6></div>
            <div class="card-body"><canvas id="tradeChart" height="200"></canvas></div>
        </div></div>
    </div>

    <!-- Extra Widgets -->
    <div class="mb-4 row g-4">
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Plan Renewals Timeline</h6></div>
            <div class="card-body"><canvas id="renewalChart" height="200"></canvas></div>
        </div></div>
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Payment Method Distribution</h6></div>
            <div class="card-body"><canvas id="paymentChart" height="200"></canvas></div>
        </div></div>
    </div>

    <!-- Live Activity Feed -->
    <div class="mt-4 card chart-card">
        <div class="bg-white border-0 card-header d-flex justify-content-between align-items-center">
            <h6 class="mb-0 fw-bold">Live Activity Feed</h6>
            <span class="text-muted small">Auto-updating</span>
        </div>
        <div class="p-0 card-body">
            <ul id="activityFeed" class="list-group list-group-flush" style="max-height:250px; overflow:auto;">
                <li class="list-group-item">[09:15] Deposit of <b>$1,200</b> confirmed</li>
                <li class="list-group-item">[09:10] Trade executed: <b>BTC/ETH</b> worth $4,500</li>
                <li class="list-group-item">[09:05] Withdrawal of <b>$600</b> requested</li>
                <li class="list-group-item">[09:00] Plan Renewal: <b>Monthly Growth</b> $2,000</li>
            </ul>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/transactions-history.js') }}"></script>
@endpush
