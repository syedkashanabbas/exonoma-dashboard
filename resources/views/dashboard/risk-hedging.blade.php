@extends('layouts.layout1')

@section('title', 'Risk & Hedging')

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
    .chart-card { position: relative; overflow: hidden; }
    .chart-card::before {
        content: ""; position: absolute; top:-50%; left:-50%; width:200%; height:200%;
        background: conic-gradient(from 180deg,#0d6efd,#6610f2,#0dcaf0,#0d6efd);
        animation: rotate 12s linear infinite; opacity:0.05;
    }
    @keyframes rotate {100%{transform:rotate(360deg)}}
    .table-hover tbody tr:hover { background: rgba(13,110,253,0.08); transform: scale(1.01); transition:0.2s; }
</style>

<div class="py-4 container-fluid">

    <!-- Header -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-bold">Risk & Hedging</h2>
            <p class="text-muted">Exposure, hedges, stop-loss monitoring, and risk metrics</p>
        </div>
        <button class="shadow-sm btn btn-danger"><i class="fas fa-shield-alt me-2"></i> Run Risk Audit</button>
    </div>

    <!-- Stats -->
    <div class="mb-4 row g-4">
        <div class="col-md-3"><div class="p-3 card"><h6 class="text-muted">Total Exposure</h6><h3>$1.25M</h3><small class="text-danger">High Risk</small></div></div>
        <div class="col-md-3"><div class="p-3 card"><h6 class="text-muted">Active Hedges</h6><h3 class="text-success">5</h3><small>protecting positions</small></div></div>
        <div class="col-md-3"><div class="p-3 card"><h6 class="text-muted">Stop-Loss Orders</h6><h3 class="text-warning">12</h3><small>triggered if breached</small></div></div>
        <div class="col-md-3"><div class="p-3 card"><h6 class="text-muted">Risk Score</h6><h3 class="text-primary">68/100</h3><small>AI-assessed</small></div></div>
    </div>

    <!-- Exposure Graph + VaR Gauge -->
    <div class="mb-4 row g-4">
        <div class="col-lg-8"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Exposure by Asset Class</h6></div>
            <div class="card-body"><canvas id="exposureBar" height="200"></canvas></div>
        </div></div>
        <div class="col-lg-4"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Value at Risk (VaR)</h6></div>
            <div class="card-body"><canvas id="varGauge" height="200"></canvas></div>
        </div></div>
    </div>

    <!-- Stop-Loss Monitor -->
    <div class="mb-4 shadow-sm card">
        <div class="bg-white border-0 card-header d-flex justify-content-between">
            <h6 class="mb-0 fw-bold">Stop-Loss Monitor</h6>
            <button class="btn btn-sm btn-outline-danger">Manage Orders</button>
        </div>
        <div class="card-body">
            <table class="table align-middle table-hover">
                <thead><tr><th>Asset</th><th>Stop Price</th><th>Current</th><th>Status</th></tr></thead>
                <tbody>
                    <tr><td>BTC</td><td>$44,500</td><td>$45,200</td><td><span class="badge bg-success">Safe</span></td></tr>
                    <tr><td>ETH</td><td>$3,100</td><td>$3,050</td><td><span class="badge bg-danger">Triggered</span></td></tr>
                    <tr><td>AAPL</td><td>$178</td><td>$182</td><td><span class="badge bg-warning text-dark">Close</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Hedging + Drawdown -->
    <div class="mb-4 row g-4">
        <div class="col-lg-6"><div class="card"><div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Active Hedge Positions</h6></div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex justify-content-between">Put Option on BTC <span class="text-success">+2.5%</span></li>
                    <li class="list-group-item d-flex justify-content-between">Short S&P Futures <span class="text-danger">-1.2%</span></li>
                    <li class="list-group-item d-flex justify-content-between">Gold ETF Long <span class="text-success">+0.9%</span></li>
                </ul>
            </div>
        </div></div>
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Drawdown Trend</h6></div>
            <div class="card-body"><canvas id="drawdownChart" height="200"></canvas></div>
        </div></div>
    </div>

    <!-- Correlation + Hedge Effectiveness -->
    <div class="row g-4">
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Asset Correlation Matrix</h6></div>
            <div class="card-body"><canvas id="correlationHeatmap" height="200"></canvas></div>
        </div></div>
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Hedge Effectiveness</h6></div>
            <div class="card-body"><canvas id="hedgeChart" height="200"></canvas></div>
        </div></div>
    </div>

    <!-- Risk Events Timeline -->
    <div class="mt-4 card">
        <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Recent Risk Events</h6></div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">ETH stop-loss triggered at $3,100 (10 mins ago)</li>
                <li class="list-group-item">BTC hedge activated (1 hr ago)</li>
                <li class="list-group-item">Volatility spike in NASDAQ detected (3 hrs ago)</li>
            </ul>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/risk-hedging.js') }}"></script>
@endpush
