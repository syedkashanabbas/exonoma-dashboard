@extends('layouts.layout1')

@section('title', 'My Commission | Exonoma')

@section('content')
<div class="container-fluid py-4">
    <h6 class="fw-bold mb-3">My Commission</h6>

    {{-- Info Alert --}}
    <div class="alert alert-primary small">
        <strong>Level 1 Commission Unlocked for 30 Days!</strong><br>
        You are qualified to receive level 1 commission rates for your first 30 days. Enjoy earning commissions as a new member!
    </div>

    {{-- Commission Stats --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <h6 class="fw-semibold mb-3">Commission Stats</h6>

            <div class="row g-3">
                <div class="col-md-8">
                    <div class="card border-0 bg-light-subtle p-5 text-center h-100">
                        <div class="text-muted small">
                            <i class="fas fa-info-circle me-2"></i>No data found for the selected date range.
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label small">From Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label small">To Date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="card border-0 shadow-sm p-3 mb-2">
                        <p class="mb-1 fw-semibold">0 GPUS</p>
                        <p class="text-muted small mb-0">Commissions from Licenses</p>
                    </div>
                    <div class="card border-0 shadow-sm p-3 mb-3">
                        <p class="mb-1 fw-semibold">0 GPUS</p>
                        <p class="text-muted small mb-0">Commissions from AI Computation</p>
                    </div>
                    <button class="btn btn-primary w-100">Claim All</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Active & Qualification Streak --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <h6 class="fw-semibold mb-4">Active & Qualification Streak</h6>
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-4 text-center">
                <div>
                    <img src="https://i.pinimg.com/1200x/69/78/19/69781905dd57ba144ab71ca4271ab294.jpg" class="rounded-circle streak-img mb-2" alt="member">
                    <div><span class="badge bg-success mb-1">Enabled Member</span></div>
                    <p class="text-muted small mb-0">No License</p>
                    <p class="text-muted small">Unlock Level 1</p>
                </div>

                @for($i=1; $i<=5; $i++)
                <div>
                    <div class="streak-badge mx-auto mb-2">
                        <i class="fas fa-star text-white"></i>
                    </div>
                    <h6 class="fw-semibold mb-1 small">LEVEL {{ $i }}</h6>
                    <p class="text-muted extra-small mb-0">
                        @if($i == 1) Become Active with 1 License
                        @elseif($i == 2) 3 Active from 1st Line
                        @elseif($i == 3) 4 Active from 1st Line
                        @elseif($i == 4) 5 Active from 1st Line
                        @else 6 Active from 1st Line
                        @endif
                    </p>
                </div>
                @endfor
            </div>
        </div>
    </div>

    {{-- Commission Report --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body">
            <h6 class="fw-semibold mb-3">Commission Report</h6>

            <div class="row g-3 mb-3">
                <div class="col-md-3">
                    <label class="form-label small mb-1">From Date</label>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label class="form-label small mb-1">To Date</label>
                    <input type="date" class="form-control">
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-middle table-bordered text-center small">
                    <thead class="table-light">
                        <tr>
                            <th>Level</th>
                            <th>Commission</th>
                            <th>Active Community</th>
                            <th>Active Direct Referral</th>
                            <th>Commission Type</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" class="text-muted py-4">
                                <i class="fas fa-info-circle me-2"></i>No commission history data found in the selected date range.
                            </td>
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
.alert-primary {
    background: #eaf1ff;
    border-left: 5px solid #0043a8;
}
.btn-primary {
    background: linear-gradient(135deg, #0043a8, #007bff);
    border: none;
}
.btn-primary:hover {
    background: linear-gradient(135deg, #003b95, #006ae0);
}
.streak-img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border: 4px solid #007bff;
}
.streak-badge {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #0043a8, #007bff);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.small { font-size: 0.9rem; }
.extra-small { font-size: 0.8rem; }

@media (max-width: 768px) {
    .streak-img {
        width: 60px;
        height: 60px;
    }
    .streak-badge {
        width: 50px;
        height: 50px;
    }
    table th, table td {
        font-size: 0.75rem;
    }
}
</style>
@endpush
