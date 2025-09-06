@extends('layouts.layout1')

@section('title', 'AI Signals')

@section('content')
<style>
    /* === Futuristic Card Styles === */
    .card {
        border-radius: 16px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(10px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        transition: all 0.3s ease;
    }
    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 28px rgba(0,0,0,0.1);
    }

    /* === Gradient Headings === */
    .card h3, .card-header h6 {
        background: linear-gradient(90deg,#0d6efd,#6610f2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    /* === Stat Number Emphasis === */
    .stat-card h3 {
        font-weight: 800;
        font-size: 1.8rem;
    }

    /* === Table Polish === */
    .table thead th {
        background: linear-gradient(90deg,#f8f9fa,#eef1f8);
        border: none;
        font-weight: 600;
    }
    .table-hover tbody tr:hover {
        background: rgba(13,110,253,0.08);
        transform: scale(1.01);
        transition: all 0.2s ease;
    }

    /* === Glow Badges === */
    .badge {
        font-size: 0.8rem;
        padding: 0.4em 0.8em;
        border-radius: 10px;
        box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }

    /* === Chart Containers === */
    .chart-card {
        position: relative;
        overflow: hidden;
    }
    .chart-card::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(from 180deg,#0d6efd,#6610f2,#0dcaf0,#0d6efd);
        animation: rotate 8s linear infinite;
        opacity: 0.07;
    }
    @keyframes rotate { 100% { transform: rotate(360deg); } }
</style>

<div class="py-4 container-fluid">

    <!-- Header -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-bold">AI Signals</h2>
            <p class="text-muted">Buy/Sell alerts, futuristic predictions & confidence scores</p>
        </div>
        <button class="shadow-sm btn btn-primary">
            <i class="fas fa-sync-alt me-2"></i> Refresh Signals
        </button>
    </div>

    <!-- Stats -->
    <div class="mb-4 row g-4">
        <div class="col-md-3"><div class="card stat-card"><div class="card-body">
            <h6 class="text-muted">Total Alerts</h6><h3>152</h3>
            <small class="text-success">+12 today</small>
        </div></div></div>
        <div class="col-md-3"><div class="card stat-card"><div class="card-body">
            <h6 class="text-muted">Buy Signals</h6><h3 class="text-success">89</h3>
            <small class="text-muted">active opportunities</small>
        </div></div></div>
        <div class="col-md-3"><div class="card stat-card"><div class="card-body">
            <h6 class="text-muted">Sell Signals</h6><h3 class="text-danger">63</h3>
            <small class="text-muted">recommended exits</small>
        </div></div></div>
        <div class="col-md-3"><div class="card stat-card"><div class="card-body">
            <h6 class="text-muted">Avg. Confidence</h6><h3 class="text-primary">82%</h3>
            <small class="text-muted">model accuracy</small>
        </div></div></div>
    </div>

    <!-- Alerts Table -->
    <div class="mb-4 border-0 shadow-sm card">
        <div class="bg-white border-0 card-header d-flex justify-content-between">
            <h6 class="mb-0 fw-bold">Latest AI Alerts</h6>
            <button class="btn btn-sm btn-outline-primary">Export</button>
        </div>
        <div class="card-body">
            <table class="table align-middle table-hover">
                <thead><tr><th>Asset</th><th>Signal</th><th>Confidence</th><th>Target</th><th>Issued</th></tr></thead>
                <tbody>
                    <tr><td>Bitcoin (BTC)</td><td><span class="badge bg-success">Buy</span></td><td>91%</td><td>$48,200</td><td>2m ago</td></tr>
                    <tr><td>Apple (AAPL)</td><td><span class="badge bg-danger">Sell</span></td><td>77%</td><td>$182.5</td><td>5m ago</td></tr>
                    <tr><td>Ethereum (ETH)</td><td><span class="badge bg-success">Buy</span></td><td>84%</td><td>$3,250</td><td>12m ago</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Futuristic Widgets -->
    <div class="mb-4 row g-4">
        <div class="col-lg-6"><div class="card chart-card"><div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Signal Strength Radar</h6></div><div class="card-body"><canvas id="radarChart" height="200"></canvas></div></div></div>
        <div class="col-lg-6"><div class="card chart-card"><div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Market Sentiment</h6></div><div class="card-body"><canvas id="polarChart" height="200"></canvas></div></div></div>
    </div>

    <div class="mb-4 row g-4">
        <div class="col-lg-6"><div class="card chart-card"><div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Volatility vs Confidence</h6></div><div class="card-body"><canvas id="bubbleChart" height="200"></canvas></div></div></div>
        <div class="col-lg-6"><div class="card chart-card"><div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">AI Accuracy Meter</h6></div><div class="card-body"><canvas id="gaugeChart" height="200"></canvas></div></div></div>
    </div>

    <div class="row g-4">
        <div class="col-lg-8"><div class="card chart-card"><div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Weekly Signal Heatmap</h6></div><div class="card-body"><canvas id="heatmapChart" height="200"></canvas></div></div></div>
        <div class="col-lg-4"><div class="card"><div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Top AI Picks</h6></div><div class="card-body"><ul class="list-group list-group-flush"><li class="list-group-item d-flex justify-content-between">Tesla <span class="text-success fw-bold">+12%</span></li><li class="list-group-item d-flex justify-content-between">Amazon <span class="text-success fw-bold">+8%</span></li><li class="list-group-item d-flex justify-content-between">Netflix <span class="text-success fw-bold">+5%</span></li></ul></div></div></div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/ai-signals.js') }}"></script>
@endpush
