@extends('layouts.layout1')

@section('title', 'Exonoma | My Dashboard')

@section('content')
<div class="py-4 container-fluid" style="background:#f5f7fb; min-height:100vh;">

    <!-- Welcome Banner -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-5 text-white shadow-sm rounded-4" 
                 style="background: linear-gradient(135deg,#667eea,#764ba2);">
                <h1 class="mb-2 fw-bold">Welcome Back, {{ Auth::user()->name }} 👋</h1>
                <p class="mb-0">Keep pushing your limits — today’s another chance to level up!</p>

            </div>
        </div>
    </div>

    <!-- Top Widgets: Continue + Quick Stats -->
    <div class="mb-4 row g-4">
        <div class="col-lg-8">
            <div class="border-0 shadow-sm card rounded-4 h-100" data-aos="fade-right">
                <div class="card-body d-flex">
                    <img src="https://picsum.photos/seed/course1/200/120" class="shadow rounded-3 me-4" alt="">
                    <div>
                        <h5 class="fw-bold">Continue Learning</h5>
                        <h6 class="text-muted">Full Stack Web Development</h6>
                        <div class="my-2 progress rounded-pill" style="height:8px;">
                            <div class="progress-bar" style="width:45%; background:linear-gradient(90deg,#ff9966,#ff5e62);"></div>
                        </div>
                        <button class="text-white btn btn-sm" style="background:linear-gradient(90deg,#36d1dc,#5b86e5);">Resume Course</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Stats stacked -->
        <div class="col-lg-4">
            <div class="row g-3">
                <div class="col-12">
                    <div class="text-center border-0 shadow-sm card rounded-4"  style="background:#fff7f0;">
                        <div class="card-body">
                            <h6 class="fw-bold text-muted">Courses Enrolled</h6>
                            <h2 class="fw-bold text-warning">8</h2>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-center border-0 shadow-sm card rounded-4" style="background:#eafdfc;">
                        <div class="card-body">
                            <h6 class="fw-bold text-muted">Certificates</h6>
                            <h2 class="fw-bold text-success">3</h2>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-center border-0 shadow-sm card rounded-4" style="background:#f3f0ff;">
                        <div class="card-body">
                            <h6 class="fw-bold text-muted">Streak</h6>
                            <h2 class="fw-bold text-primary">🔥 5</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Active Courses Grid -->
    <div class="mb-4 row g-4" >
        <div class="col-12">
            <h4 class="mb-3 fw-bold">Active Courses</h4>
            <div class="row g-4">
                @for($i=1;$i<=4;$i++)
                <div class="col-md-3">
                    <div class="border-0 shadow-sm card rounded-4 h-100">
                        <img src="https://picsum.photos/seed/course{{ $i }}/400/200" class="card-img-top rounded-top-4" alt="">
                        <div class="card-body">
                            <h6 class="fw-bold">Course {{ $i }}</h6>
                            <div class="my-2 progress rounded-pill" style="height:6px;">
                                <div class="progress-bar" style="width: {{ 20*$i }}%; background: linear-gradient(90deg,#36d1dc,#5b86e5);"></div>
                            </div>
                            <small class="text-muted">Progress: {{ 20*$i }}%</small>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <!-- Performance + Leaderboard -->
    <div class="mb-4 row g-4">
        <div class="col-lg-6" data-aos="fade-right">
            <div class="border-0 shadow-sm card rounded-4">
                <div class="card-body">
                    <h5 class="fw-bold">Study Hours (This Week)</h5>
                    <canvas id="hoursChart" height="180"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6" data-aos="fade-left">
            <div class="border-0 shadow-sm card rounded-4">
                <div class="card-body">
                    <h5 class="fw-bold">Top Learners Leaderboard</h5>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between">Alice <span class="badge bg-success">42 hrs</span></li>
                        <li class="list-group-item d-flex justify-content-between">John <span class="badge bg-success">38 hrs</span></li>
                        <li class="list-group-item d-flex justify-content-between">Maria <span class="badge bg-success">35 hrs</span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Upcoming Deadlines + Recommendations -->
    <div class="mb-4 row g-4">
        <div class="col-lg-6" >
            <div class="border-0 shadow-sm card rounded-4">
                <div class="card-body">
                    <h5 class="fw-bold">Upcoming Deadlines</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">Assignment 2 <span class="badge bg-danger">Tomorrow</span></li>
                        <li class="list-group-item d-flex justify-content-between">Quiz 1 <span class="badge bg-warning">3 Days</span></li>
                        <li class="list-group-item d-flex justify-content-between">Project <span class="badge bg-info">1 Week</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6" >
            <div class="border-0 shadow-sm card rounded-4">
                <div class="card-body">
                    <h5 class="fw-bold">Recommended For You</h5>
                    <div class="mb-3 d-flex">
                        <img src="https://picsum.photos/seed/reco1/100/70" class="rounded me-3">
                        <div>
                            <h6 class="fw-bold">Machine Learning Basics</h6>
                            <small class="text-muted">Start Now</small>
                        </div>
                    </div>
                    <div class="d-flex">
                        <img src="https://picsum.photos/seed/reco2/100/70" class="rounded me-3">
                        <div>
                            <h6 class="fw-bold">UI/UX Crash Course</h6>
                            <small class="text-muted">Trending</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/dashboard-page.js') }}"></script>
@endpush
