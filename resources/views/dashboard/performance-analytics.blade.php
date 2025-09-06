@extends('layouts.layout1')

@section('title', 'Performance Analytics')

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
            <h2 class="fw-bold">Performance Analytics</h2>
            <p class="text-muted">Charts, benchmarks & YTD growth insights</p>
        </div>
        <button class="shadow-sm btn btn-primary"><i class="fas fa-sync-alt me-2"></i> Refresh Data</button>
    </div>

    <!-- Stats -->
    <div class="mb-4 row g-4">
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Portfolio Value</h6><h3 class="text-success">$1.25M</h3><small>as of today</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">YTD Growth</h6><h3 class="text-primary">+18%</h3><small>year-to-date</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Best Asset</h6><h3 class="text-warning">Tesla</h3><small>+42% gain</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Benchmark vs Portfolio</h6><h3 class="text-danger">+5% vs +18%</h3><small>S&P 500 lagging</small></div></div>
    </div>

    <!-- Growth Charts -->
    <div class="mb-4 row g-4">
        <div class="col-lg-8"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">YTD Growth Trend</h6></div>
            <div class="card-body"><canvas id="growthChart" height="200"></canvas></div>
        </div></div>
        <div class="col-lg-4"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Volatility Gauge</h6></div>
            <div class="card-body"><canvas id="volatilityGauge" height="200"></canvas></div>
        </div></div>
    </div>

    <!-- Benchmark Comparison -->
    <div class="mb-4 row g-4">
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Portfolio vs Benchmark</h6></div>
            <div class="card-body"><canvas id="benchmarkChart" height="200"></canvas></div>
        </div></div>
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Sharpe Ratio Trend</h6></div>
            <div class="card-body"><canvas id="sharpeChart" height="200"></canvas></div>
        </div></div>
    </div>

    <!-- Asset Performance + Highlights -->
    <div class="row g-4">
        <div class="col-lg-8"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Asset Performance Breakdown</h6></div>
            <div class="card-body"><canvas id="assetBarChart" height="200"></canvas></div>
        </div></div>
        <div class="col-lg-4"><div class="card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Recent Highlights</h6></div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Tesla surged +12% this week</li>
                    <li class="list-group-item">Apple underperformed, down -3%</li>
                    <li class="list-group-item">Gold hedge reduced volatility</li>
                </ul>
            </div>
        </div></div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/performance-analytics.js') }}"></script>
@endpush
