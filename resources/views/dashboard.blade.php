@extends('layouts.layout1')

@section('title', 'Exonoma | My Dashboard')

@section('content')
<div class="py-4 container-fluid" >
    <!-- Heading -->
    <!-- Coming Soon Overlay -->
<div class="coming-soon-overlay">
    <div class="overlay-text">Coming Soon</div>
</div>


    <div class="mb-5">
        <h2 class="fw-bold text-dark">Portfolio Overview</h2>
        <p class="text-muted">Track your investments, growth and performance in one place</p>
    </div>

    <!-- Top Stats Row -->
    <div class="mb-4 row g-4">
        <div class="col-md-3">
            <div class="border-0 shadow-sm card" style="background: linear-gradient(135deg,#eef6ff,#d9e9ff);">
                <div class="card-body">
                    <h6 class="text-muted">Total Investment</h6>
                    <h3 class="fw-bold text-primary">$120,500</h3>
                    <small class="text-muted">as of today</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border-0 shadow-sm card" style="background: linear-gradient(135deg,#fef6e4,#fdecc8);">
                <div class="card-body">
                    <h6 class="text-muted">ROI</h6>
                    <h3 class="fw-bold text-warning">14.5%</h3>
                    <small class="text-muted">year to date</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border-0 shadow-sm card" style="background: linear-gradient(135deg,#e8fdf5,#c8f5e1);">
                <div class="card-body">
                    <h6 class="text-muted">Daily Profit / Loss</h6>
                    <h3 class="fw-bold text-success">+$350</h3>
                    <small class="text-muted">vs yesterday</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border-0 shadow-sm card" style="background: linear-gradient(135deg,#fff5f5,#ffe0e0);">
                <div class="card-body">
                    <h6 class="text-muted">Risk Level</h6>
                    <h3 class="fw-bold text-danger">Moderate</h3>
                    <small class="text-muted">auto-assessed</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart + Side Widgets -->
    <div class="row g-4">
        <!-- Main Chart -->
        <div class="col-lg-8">
            <div class="border-0 shadow-sm card">
                <div class="bg-white border-0 card-header d-flex justify-content-between">
                    <h6 class="mb-0 fw-bold">Portfolio Performance</h6>
                    <button class="btn btn-sm btn-outline-primary">Export</button>
                </div>
                <div class="card-body">
                    <canvas id="portfolioChart" height="150"></canvas>
                </div>
            </div>
        </div>
        <!-- Side Widgets -->
        <div class="col-lg-4">
            <div class="mb-4 border-0 shadow-sm card">
                <div class="card-body">
                    <h6 class="fw-bold">Top Assets</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Apple (AAPL) <span class="fw-bold text-success">+3.1%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Bitcoin (BTC) <span class="fw-bold text-danger">-1.4%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tesla (TSLA) <span class="fw-bold text-success">+5.6%</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-0 shadow-sm card">
                <div class="card-body">
                    <h6 class="fw-bold">Upcoming Dividends</h6>
                    <p class="mb-2 text-muted small">Next 7 days</p>
                    <p class="mb-1">Microsoft – <span class="fw-bold">$120</span></p>
                    <p class="mb-0">Coca Cola – <span class="fw-bold">$85</span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Transactions Table -->
    <div class="mt-5 row">
        <div class="col-12">
            <div class="border-0 shadow-sm card">
                <div class="bg-white border-0 card-header">
                    <h6 class="mb-0 fw-bold">Recent Transactions</h6>
                </div>
                <div class="card-body">
                    <table class="table align-middle table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Sep 5, 2025</td>
                                <td>Deposit</td>
                                <td>$5,000</td>
                                <td><span class="badge bg-success">Completed</span></td>
                            </tr>
                            <tr>
                                <td>Sep 3, 2025</td>
                                <td>Trade</td>
                                <td>$1,200</td>
                                <td><span class="badge bg-primary">Executed</span></td>
                            </tr>
                            <tr>
                                <td>Aug 30, 2025</td>
                                <td>Withdrawal</td>
                                <td>$800</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endpush
