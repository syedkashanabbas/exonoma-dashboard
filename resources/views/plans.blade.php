@extends('layouts.layout1')

@section('title', 'Plans Management')

@section('content')
<div class="py-4 container-fluid">

    <!-- Header -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-bold text-dark">Plans Management</h2>
            <p class="text-muted">Manage Monthly, Semi-Compound and Compound investment plans</p>
        </div>
        <button class="shadow-sm btn btn-primary">
            <i class="fas fa-plus me-2"></i> Create New Plan
        </button>
    </div>

    <!-- Stats Overview -->
    <div class="mb-4 row g-4">
        <div class="col-md-3">
            <div class="border-0 shadow-sm card">
                <div class="card-body">
                    <h6 class="text-muted">Total Plans</h6>
                    <h3 class="fw-bold">12</h3>
                    <small class="text-success">+2 this month</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border-0 shadow-sm card">
                <div class="card-body">
                    <h6 class="text-muted">Active Plans</h6>
                    <h3 class="fw-bold text-success">8</h3>
                    <small class="text-muted">currently running</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border-0 shadow-sm card">
                <div class="card-body">
                    <h6 class="text-muted">Inactive Plans</h6>
                    <h3 class="fw-bold text-danger">4</h3>
                    <small class="text-muted">paused or expired</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="border-0 shadow-sm card">
                <div class="card-body">
                    <h6 class="text-muted">Average ROI</h6>
                    <h3 class="fw-bold text-primary">14.6%</h3>
                    <small class="text-muted">across all plans</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Tabs -->
    <ul class="mb-4 nav nav-pills" id="planTabs">
        <li class="nav-item"><a class="nav-link active" href="#">All</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Active</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Inactive</a></li>
    </ul>

    <!-- Plans Grid -->
    <div class="mb-5 row g-4">
        <!-- Monthly Plan -->
        <div class="col-md-4">
            <div class="border-0 shadow-sm card plan-card">
                <div class="card-body">
                    <h5 class="fw-bold">Monthly Plan</h5>
                    <p class="text-muted small">Fixed monthly returns</p>
                    <h3 class="fw-bold text-primary">12% ROI</h3>
                    <div class="mt-3 d-flex justify-content-between align-items-center">
                        <span class="badge bg-success">Active</span>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Semi-Compound Plan -->
        <div class="col-md-4">
            <div class="border-0 shadow-sm card plan-card">
                <div class="card-body">
                    <h5 class="fw-bold">Semi-Compound</h5>
                    <p class="text-muted small">Profits re-invested quarterly</p>
                    <h3 class="fw-bold text-warning">15% ROI</h3>
                    <div class="mt-3 d-flex justify-content-between align-items-center">
                        <span class="badge bg-success">Active</span>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Compound Plan -->
        <div class="col-md-4">
            <div class="border-0 shadow-sm card plan-card">
                <div class="card-body">
                    <h5 class="fw-bold">Compound Plan</h5>
                    <p class="text-muted small">Monthly compounding returns</p>
                    <h3 class="fw-bold text-success">18% ROI</h3>
                    <div class="mt-3 d-flex justify-content-between align-items-center">
                        <span class="badge bg-danger">Inactive</span>
                        <div>
                            <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Extra Widgets -->
    <div class="row g-4">
        <!-- Recent Activity -->
        <div class="col-lg-6">
            <div class="border-0 shadow-sm card">
                <div class="bg-white border-0 card-header">
                    <h6 class="mb-0 fw-bold">Recent Activity</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">New plan <b>Compound Gold</b> created</li>
                        <li class="list-group-item">Plan <b>Monthly Silver</b> updated ROI to 13%</li>
                        <li class="list-group-item">Plan <b>Quarterly Growth</b> archived</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ROI Chart -->
        <div class="col-lg-6">
            <div class="border-0 shadow-sm card">
                <div class="bg-white border-0 card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 fw-bold">ROI Performance</h6>
                    <button class="btn btn-sm btn-outline-primary">Export</button>
                </div>
                <div class="card-body">
                    <canvas id="roiChart" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/plan.js') }}"></script>
@endpush
