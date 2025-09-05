@extends('layouts.layout1')

@section('title', 'Academy | My Courses')

@section('content')
<div class="py-4 container-fluid" style="background:#f9f9fb; min-height:100vh;">

    <!-- Header -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-5 text-white shadow-sm rounded-4" 
                 style="background: linear-gradient(135deg,#ff9966,#ff5e62);">
                <h1 class="mb-2 fw-bold">My Courses</h1>
                <p class="mb-0">Browse, filter, and manage all your enrolled courses</p>
            </div>
        </div>
    </div>

    <!-- Filters + Search -->
    <div class="mb-4 row">
        <div class="col-md-8 d-flex align-items-center">
            <button class="btn btn-outline-primary me-2 filter-btn" data-filter="all">All</button>
            <button class="btn btn-outline-success me-2 filter-btn" data-filter="active">Active</button>
            <button class="btn btn-outline-secondary me-2 filter-btn" data-filter="completed">Completed</button>
            <button class="btn btn-outline-warning filter-btn" data-filter="wishlist">Wishlist</button>
        </div>
        <div class="col-md-4">
            <input type="text" id="courseSearch" class="form-control" placeholder="Search courses...">
        </div>
    </div>

    <!-- Toggle View -->
    <div class="mb-3 row">
        <div class="col-12 d-flex justify-content-end">
            <button class="btn btn-light me-2" id="gridView"><i class="fas fa-th"></i></button>
            <button class="btn btn-light" id="listView"><i class="fas fa-list"></i></button>
        </div>
    </div>

    <!-- Courses Grid -->
    <div id="coursesWrapper" class="row g-4">
        <!-- Example Course Card -->
        <div class="col-md-4 course-card" data-status="active">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <img src="https://picsum.photos/seed/course1/400/200" class="card-img-top rounded-top-4" alt="">
                <div class="card-body">
                    <h6 class="fw-bold">Full Stack Web Development</h6>
                    <p class="text-muted small">Instructor: Jane Smith</p>
                    <div class="my-2 progress rounded-pill" style="height:6px;">
                        <div class="progress-bar bg-success" style="width:45%;"></div>
                    </div>
                    <small class="text-muted">Progress: 45%</small>
                    <div class="mt-3 d-flex justify-content-between">
                        <button class="btn btn-sm btn-primary">Resume</button>
                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Another Example -->
        <div class="col-md-4 course-card" data-status="completed">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <img src="https://picsum.photos/seed/course2/400/200" class="card-img-top rounded-top-4" alt="">
                <div class="card-body">
                    <h6 class="fw-bold">Python for Beginners</h6>
                    <p class="text-muted small">Instructor: John Doe</p>
                    <div class="my-2 progress rounded-pill" style="height:6px;">
                        <div class="progress-bar bg-info" style="width:100%;"></div>
                    </div>
                    <small class="text-muted">Completed</small>
                    <div class="mt-3 d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-secondary">Review</button>
                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wishlist Example -->
        <div class="col-md-4 course-card" data-status="wishlist">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <img src="https://picsum.photos/seed/course3/400/200" class="card-img-top rounded-top-4" alt="">
                <div class="card-body">
                    <h6 class="fw-bold">Data Science with R</h6>
                    <p class="text-muted small">Instructor: Emily Brown</p>
                    <small class="badge bg-warning text-dark">Wishlist</small>
                    <div class="mt-3 d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-primary">Enroll</button>
                        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recommended Courses -->
    <div class="mt-5 row">
        <div class="col-12">
            <h4 class="mb-3 fw-bold">Recommended For You</h4>
            <div class="overflow-auto d-flex">
                <div class="me-3" style="min-width:250px;">
                    <img src="https://picsum.photos/seed/reco1/250/150" class="shadow-sm rounded-3 w-100">
                    <h6 class="mt-2 fw-bold">Machine Learning Basics</h6>
                </div>
                <div class="me-3" style="min-width:250px;">
                    <img src="https://picsum.photos/seed/reco2/250/150" class="shadow-sm rounded-3 w-100">
                    <h6 class="mt-2 fw-bold">UI/UX Crash Course</h6>
                </div>
                <div class="me-3" style="min-width:250px;">
                    <img src="https://picsum.photos/seed/reco3/250/150" class="shadow-sm rounded-3 w-100">
                    <h6 class="mt-2 fw-bold">DevOps Essentials</h6>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/my-courses-page.js') }}"></script>
@endpush
