@extends('layouts.layout1')

@section('title', 'Notifications Center')

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
            <h2 class="fw-bold">Notifications Center</h2>
            <p class="text-muted">Risk alerts, plan updates & AI alerts</p>
        </div>
        <button class="shadow-sm btn btn-primary"><i class="fas fa-bell me-2"></i> Clear All</button>
    </div>

    <!-- Stats -->
    <div class="mb-4 row g-4">
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Total Notifications</h6><h3 class="text-primary">245</h3><small>last 30 days</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Risk Alerts</h6><h3 class="text-danger">67</h3><small>system generated</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Plan Updates</h6><h3 class="text-warning">92</h3><small>renewals & changes</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">AI Alerts</h6><h3 class="text-success">86</h3><small>AI-driven signals</small></div></div>
    </div>

    <!-- Tabs -->
    <ul class="mb-3 nav nav-pills" id="notifTabs">
        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#riskTab">Risk Alerts</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#planTab">Plan Updates</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#aiTab">AI Alerts</a></li>
    </ul>

    <div class="mb-4 tab-content">
        <!-- Risk Alerts -->
        <div class="tab-pane fade show active" id="riskTab">
            <div class="mb-3 card">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-danger"><i class="fas fa-exclamation-circle me-2"></i>BTC stop-loss triggered at $44,500</li>
                        <li class="list-group-item text-warning"><i class="fas fa-exclamation-triangle me-2"></i>High volatility detected in NASDAQ</li>
                        <li class="list-group-item text-success"><i class="fas fa-check-circle me-2"></i>Risk hedge activated successfully</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Plan Updates -->
        <div class="tab-pane fade" id="planTab">
            <div class="mb-3 card">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-sync-alt me-2 text-primary"></i>Monthly Plan renewed successfully</li>
                        <li class="list-group-item"><i class="fas fa-edit me-2 text-warning"></i>ROI updated for Semi-Compound Plan</li>
                        <li class="list-group-item"><i class="fas fa-ban me-2 text-danger"></i>Compound Plan paused</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- AI Alerts -->
        <div class="tab-pane fade" id="aiTab">
            <div class="mb-3 card">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-success"><i class="fas fa-arrow-up me-2"></i>AI suggests BUY on Ethereum (Confidence: 89%)</li>
                        <li class="list-group-item text-danger"><i class="fas fa-arrow-down me-2"></i>AI suggests SELL on Apple (Confidence: 76%)</li>
                        <li class="list-group-item text-primary"><i class="fas fa-brain me-2"></i>AI predicts BTC target $48,200 in 7 days</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts -->
<!-- Charts -->
<div class="row g-4">
    <!-- Radar Chart -->
    <div class="col-lg-6">
        <div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Category Intensity Radar</h6></div>
            <div class="card-body"><canvas id="notifRadar" height="220"></canvas></div>
        </div>
    </div>

    <!-- Bubble Chart -->
    <div class="col-lg-6">
        <div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Alert Urgency Map</h6></div>
            <div class="card-body"><canvas id="notifBubble" height="220"></canvas></div>
        </div>
    </div>
</div>

<div class="mt-3 row g-4">
    <!-- Stacked Area Chart -->
    <div class="col-12">
        <div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Cumulative Notifications Trend</h6></div>
            <div class="card-body"><canvas id="notifArea" height="220"></canvas></div>
        </div>
    </div>
</div>


</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/notifications-center.js') }}"></script>
@endpush
