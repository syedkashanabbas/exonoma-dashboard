@extends('layouts.layout1')

@section('title', 'Reports & Compliance')

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
            <h2 class="fw-bold">Reports & Compliance</h2>
            <p class="text-muted">Statements, audit logs & export options</p>
        </div>
        <button class="shadow-sm btn btn-primary"><i class="fas fa-file-export me-2"></i> Export Reports</button>
    </div>

    <!-- Stats -->
    <div class="mb-4 row g-4">
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Total Reports</h6><h3 class="text-success">320</h3><small>generated this year</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Pending Audits</h6><h3 class="text-danger">4</h3><small>requires review</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Compliance Status</h6><h3 class="text-primary">98%</h3><small>regulatory score</small></div></div>
        <div class="col-md-3"><div class="p-3 card stat-card"><h6 class="text-muted">Last Export</h6><h3 class="text-warning">Sep 3</h3><small>2 days ago</small></div></div>
    </div>

    <!-- Statements Table -->
    <div class="mb-4 shadow-sm card">
        <div class="bg-white border-0 card-header d-flex justify-content-between">
            <h6 class="mb-0 fw-bold">Statements</h6>
            <button class="btn btn-sm btn-outline-primary">Download All</button>
        </div>
        <div class="card-body">
            <table class="table align-middle table-hover">
                <thead><tr><th>Date</th><th>Type</th><th>Amount</th><th>File</th></tr></thead>
                <tbody>
                    <tr><td>Sep 5, 2025</td><td>Monthly Statement</td><td>$12,300</td><td><a href="#" class="btn btn-sm btn-outline-secondary">PDF</a></td></tr>
                    <tr><td>Aug 31, 2025</td><td>Quarterly Report</td><td>$48,900</td><td><a href="#" class="btn btn-sm btn-outline-secondary">PDF</a></td></tr>
                    <tr><td>Aug 1, 2025</td><td>Monthly Statement</td><td>$11,800</td><td><a href="#" class="btn btn-sm btn-outline-secondary">PDF</a></td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Audit Logs -->
    <div class="mb-4 shadow-sm card">
        <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Audit Logs</h6></div>
        <div class="card-body">
            <table class="table align-middle table-hover">
                <thead><tr><th>Timestamp</th><th>User</th><th>Action</th><th>Status</th></tr></thead>
                <tbody>
                    <tr><td>Sep 5, 09:15</td><td>Admin</td><td>Exported Quarterly Report</td><td><span class="badge bg-success">Success</span></td></tr>
                    <tr><td>Sep 3, 18:20</td><td>ComplianceBot</td><td>Audit Check</td><td><span class="badge bg-success">Pass</span></td></tr>
                    <tr><td>Aug 30, 15:05</td><td>User123</td><td>Downloaded Statement</td><td><span class="badge bg-warning text-dark">Pending</span></td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="mb-4 row g-4">
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Compliance Trend</h6></div>
            <div class="card-body"><canvas id="complianceChart" height="200"></canvas></div>
        </div></div>
        <div class="col-lg-6"><div class="card chart-card">
            <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Export Activity</h6></div>
            <div class="card-body"><canvas id="exportChart" height="200"></canvas></div>
        </div></div>
    </div>

    <!-- Alerts -->
    <div class="mt-4 card">
        <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Recent Compliance Alerts</h6></div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">New audit scheduled for Sep 10</li>
                <li class="list-group-item">System flagged unusual withdrawal patterns</li>
                <li class="list-group-item">Quarterly compliance report submitted successfully</li>
            </ul>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/reports-compliance.js') }}"></script>
@endpush
