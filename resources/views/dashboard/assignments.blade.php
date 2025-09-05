@extends('layouts.layout1')

@section('title', 'Academy | Assignments & Quizzes')

@section('content')
<div class="py-5 container-fluid" style="background:#f5f7fb; min-height:100vh;">

    <!-- Header -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-5 text-white shadow-sm rounded-4" 
                 style="background: linear-gradient(135deg,#36d1dc,#5b86e5);">
                <h1 class="mb-2 fw-bold">Assignments & Quizzes</h1>
                <p class="mb-0">Track deadlines, attempt quizzes, and review your results history</p>
            </div>
        </div>
    </div>

    <!-- Progress Summary -->
    <div class="mb-5 row justify-content-center">
        <div class="col-lg-6">
            <div class="p-4 text-center bg-white shadow-sm rounded-4">
                <h5 class="mb-2 fw-bold">Overall Completion</h5>
                <div class="mb-2 progress rounded-pill" style="height:14px;">
                    <div class="progress-bar" style="width:65%; background:linear-gradient(90deg,#36d1dc,#5b86e5);"></div>
                </div>
                <small class="text-muted">You’ve completed 13 out of 20 tasks (65%)</small>
            </div>
        </div>
    </div>

    <!-- Pending Assignments & Quizzes -->
    <div class="mb-5 row">
        <div class="col-12">
            <h4 class="mb-3 fw-bold">Pending Tasks</h4>
            <div class="row g-4">

                <!-- Assignment Card -->
                <div class="col-md-4">
                    <div class="border-0 shadow-sm card rounded-4 h-100">
                        <div class="card-body">
                            <h6 class="fw-bold">Assignment 2: Python Basics</h6>
                            <p class="mb-2 text-muted small">Due: Tomorrow</p>
                            <span class="mb-2 badge bg-danger">Pending</span>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-primary">Start</button>
                                <button class="btn btn-sm btn-outline-secondary">Details</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quiz Card -->
                <div class="col-md-4">
                    <div class="border-0 shadow-sm card rounded-4 h-100">
                        <div class="card-body">
                            <h6 class="fw-bold">Quiz 1: Data Science with R</h6>
                            <p class="mb-2 text-muted small">Due: In 3 Days</p>
                            <span class="mb-2 badge bg-warning text-dark">Upcoming</span>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-primary">Attempt</button>
                                <button class="btn btn-sm btn-outline-secondary">Review Syllabus</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Practice Test -->
                <div class="col-md-4">
                    <div class="border-0 shadow-sm card rounded-4 h-100">
                        <div class="card-body">
                            <h6 class="fw-bold">Practice Test: JavaScript</h6>
                            <p class="mb-2 text-muted small">Available Anytime</p>
                            <span class="mb-2 badge bg-success">Optional</span>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-sm btn-primary">Take Test</button>
                                <button class="btn btn-sm btn-outline-secondary">View Topics</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Results History -->
    <div class="mb-5 row">
        <div class="col-12">
            <h4 class="mb-3 fw-bold">Results History</h4>
            <div class="border-0 shadow-sm card rounded-4">
                <div class="card-body table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Score</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Assignment 1: HTML Basics</td>
                                <td>2025-08-15</td>
                                <td>85%</td>
                                <td><span class="badge bg-success">Passed</span></td>
                                <td><button class="btn btn-sm btn-outline-primary">View</button></td>
                            </tr>
                            <tr>
                                <td>Quiz 1: Python Fundamentals</td>
                                <td>2025-08-10</td>
                                <td>55%</td>
                                <td><span class="badge bg-danger">Failed</span></td>
                                <td><button class="btn btn-sm btn-outline-primary">Retake</button></td>
                            </tr>
                            <tr>
                                <td>Practice Test: SQL Basics</td>
                                <td>2025-07-30</td>
                                <td>70%</td>
                                <td><span class="badge bg-warning text-dark">Average</span></td>
                                <td><button class="btn btn-sm btn-outline-primary">Review</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Leaderboard -->
    <div class="mb-5 row">
        <div class="col-12">
            <h4 class="mb-3 fw-bold">Top Scorers</h4>
            <div class="overflow-auto d-flex">
                <div class="p-3 text-center bg-white shadow-sm me-3 rounded-4" style="min-width:200px;">
                    <h6 class="fw-bold">Alice</h6>
                    <p class="mb-1 text-muted small">95% Avg</p>
                    <span class="badge bg-success">#1</span>
                </div>
                <div class="p-3 text-center bg-white shadow-sm me-3 rounded-4" style="min-width:200px;">
                    <h6 class="fw-bold">John</h6>
                    <p class="mb-1 text-muted small">90% Avg</p>
                    <span class="badge bg-info">#2</span>
                </div>
                <div class="p-3 text-center bg-white shadow-sm rounded-4" style="min-width:200px;">
                    <h6 class="fw-bold">Maria</h6>
                    <p class="mb-1 text-muted small">88% Avg</p>
                    <span class="badge bg-warning text-dark">#3</span>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/assignments-page.js') }}"></script>
@endpush
