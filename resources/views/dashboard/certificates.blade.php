@extends('layouts.layout1')

@section('title', 'Academy | Certificates')

@section('content')
<div class="py-5 container-fluid" style="background:#f5f7fb; min-height:100vh;">

    <!-- Header -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-5 text-white shadow-sm rounded-4"
                 style="background: linear-gradient(135deg,#ff9a9e,#fad0c4);">
                <h1 class="mb-2 fw-bold">Certificates</h1>
                <p class="mb-0">Showcase your achievements and milestones</p>
            </div>
        </div>
    </div>

    <!-- Certificates Showcase -->
    <div class="mb-5 row">
        <div class="col-12">
            <h4 class="mb-3 fw-bold">Your Certificates</h4>
            <div class="row g-4">

                <!-- Certificate Card -->
                <div class="col-md-4">
                    <div class="text-center border-0 shadow-sm card rounded-4 h-100">
                        <img src="https://picsum.photos/seed/cert1/400/250" class="rounded-top-4" alt="">
                        <div class="card-body">
                            <h6 class="fw-bold">Python Fundamentals</h6>
                            <p class="text-muted small">Earned: Aug 2025</p>
                            <div class="gap-2 d-flex justify-content-center">
                                <button class="btn btn-sm btn-primary">Download</button>
                                <button class="btn btn-sm btn-outline-secondary">Share</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Another -->
                <div class="col-md-4">
                    <div class="text-center border-0 shadow-sm card rounded-4 h-100">
                        <img src="https://picsum.photos/seed/cert2/400/250" class="rounded-top-4" alt="">
                        <div class="card-body">
                            <h6 class="fw-bold">Web Development Bootcamp</h6>
                            <p class="text-muted small">Earned: July 2025</p>
                            <div class="gap-2 d-flex justify-content-center">
                                <button class="btn btn-sm btn-primary">Download</button>
                                <button class="btn btn-sm btn-outline-secondary">Share</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Another -->
                <div class="col-md-4">
                    <div class="text-center border-0 shadow-sm card rounded-4 h-100">
                        <img src="https://picsum.photos/seed/cert3/400/250" class="rounded-top-4" alt="">
                        <div class="card-body">
                            <h6 class="fw-bold">Data Science with R</h6>
                            <p class="text-muted small">Earned: June 2025</p>
                            <div class="gap-2 d-flex justify-content-center">
                                <button class="btn btn-sm btn-primary">Download</button>
                                <button class="btn btn-sm btn-outline-secondary">Share</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Progress to Next Certificate -->
    <div class="mb-5 row justify-content-center">
        <div class="col-lg-6">
            <div class="p-4 text-center bg-white shadow-sm rounded-4">
                <h5 class="fw-bold">Progress Towards Next Certificate</h5>
                <div class="my-3 progress rounded-pill" style="height:14px;">
                    <div class="progress-bar" style="width:75%; background:linear-gradient(90deg,#ff9a9e,#fad0c4);"></div>
                </div>
                <small class="text-muted">You’re 3 lessons away from your <b>React Developer</b> certificate 🚀</small>
            </div>
        </div>
    </div>

    <!-- Achievements & Badges -->
    <div class="mb-5 row">
        <div class="col-12">
            <h4 class="mb-3 fw-bold">Achievements & Badges</h4>
            <div class="flex-wrap gap-3 d-flex">
                <span class="p-3 badge rounded-pill bg-primary">🔥 Fast Learner</span>
                <span class="p-3 badge rounded-pill bg-success">🏆 Top Scorer</span>
                <span class="p-3 badge rounded-pill bg-warning">📚 Consistency King</span>
                <span class="p-3 badge rounded-pill bg-info">💡 Problem Solver</span>
            </div>
        </div>
    </div>

    <!-- Timeline -->
    <div class="mb-5 row">
        <div class="col-12">
            <h4 class="mb-3 fw-bold">Certificate Timeline</h4>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between">
                    <span>Python Fundamentals</span>
                    <small class="text-muted">Aug 2025</small>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Web Development Bootcamp</span>
                    <small class="text-muted">July 2025</small>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Data Science with R</span>
                    <small class="text-muted">June 2025</small>
                </li>
            </ul>
        </div>
    </div>

    <!-- Recommended Next Certificate -->
    <div class="row">
        <div class="col-12">
            <div class="p-4 text-center bg-white shadow-sm rounded-4">
                <h4 class="mb-3 fw-bold">Next Step: React Developer Certificate</h4>
                <p class="text-muted">Complete your React course to unlock this certificate and level up your profile.</p>
                <button class="text-white btn btn-lg" style="background:linear-gradient(90deg,#ff512f,#dd2476);">Continue Learning</button>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/certificates-page.js') }}"></script>
@endpush
