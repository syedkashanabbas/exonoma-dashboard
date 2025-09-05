@extends('layouts.layout1')

@section('title', 'Academy | Performance & Analytics')

@section('content')
<div class="py-5 container-fluid" style="background:#f5f7fb; min-height:100vh;">

    <!-- Header -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-5 text-white shadow-sm rounded-4"
                 style="background: linear-gradient(135deg,#667eea,#764ba2);">
                <h1 class="mb-2 fw-bold">Performance & Analytics</h1>
                <p class="mb-0">Track your progress with detailed insights and trends</p>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="mb-5 row g-4">
        <div class="col-md-3">
            <div class="p-4 text-center bg-white shadow-sm rounded-4">
                <h6 class="fw-bold text-muted">Hours Studied</h6>
                <h2 class="fw-bold text-primary">42</h2>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 text-center bg-white shadow-sm rounded-4">
                <h6 class="fw-bold text-muted">Avg Quiz Score</h6>
                <h2 class="fw-bold text-success">78%</h2>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 text-center bg-white shadow-sm rounded-4">
                <h6 class="fw-bold text-muted">Streak</h6>
                <h2 class="fw-bold text-warning">🔥 6 Days</h2>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 text-center bg-white shadow-sm rounded-4">
                <h6 class="fw-bold text-muted">Skill Growth</h6>
                <h2 class="fw-bold text-info">+34%</h2>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="mb-5 row g-4">
        <div class="col-lg-6">
            <div class="p-4 bg-white shadow-sm rounded-4">
                <h6 class="mb-3 fw-bold">Hours Studied (Last 7 Days)</h6>
                <canvas id="hoursChart" height="200"></canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-4 bg-white shadow-sm rounded-4">
                <h6 class="mb-3 fw-bold">Quiz Scores by Subject</h6>
                <canvas id="quizChart" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- More Charts -->
    <div class="mb-5 row g-4">
        <div class="col-lg-6">
            <div class="p-4 text-center bg-white shadow-sm rounded-4">
                <h6 class="mb-3 fw-bold">Consistency Streak</h6>
                <canvas id="streakChart" height="200"></canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-4 bg-white shadow-sm rounded-4">
                <h6 class="mb-3 fw-bold">Skill Growth Radar</h6>
                <canvas id="skillsChart" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Motivational CTA -->
    <div class="row">
        <div class="col-12">
            <div class="p-4 text-center text-white shadow-sm rounded-4"
                 style="background: linear-gradient(135deg,#ff512f,#dd2476);">
                <h4 class="fw-bold">Keep the momentum going! 🚀</h4>
                <p class="mb-0">Your streak is strong. Push one more day and unlock a new badge!</p>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('assets/js/performance-page.js') }}"></script>
@endpush
