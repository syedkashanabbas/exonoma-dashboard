@extends('layouts.layout1')

@section('title', 'Academy | Resources')

@section('content')
<div class="py-5 container-fluid" style="background:#f5f7fb; min-height:100vh;">

    <!-- Header -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-5 text-white shadow-sm rounded-4"
                 style="background: linear-gradient(135deg,#36d1dc,#5b86e5);">
                <h1 class="mb-2 fw-bold">Resources</h1>
                <p class="mb-0">Access lecture notes, PDFs, slides, and bonus materials for your courses</p>
            </div>
        </div>
    </div>

    <!-- Search + Filter -->
    <div class="mb-4 row">
        <div class="col-md-8">
            <input type="text" id="resourceSearch" class="form-control" placeholder="Search resources...">
        </div>
        <div class="col-md-4">
            <select id="resourceFilter" class="form-select">
                <option value="all">All Courses</option>
                <option value="python">Python</option>
                <option value="webdev">Web Development</option>
                <option value="datasci">Data Science</option>
            </select>
        </div>
    </div>

    <!-- Resource Cards -->
    <div id="resourcesWrapper" class="row g-4">

        <!-- Resource Card Example -->
        <div class="col-md-4 resource-card" data-course="python">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body d-flex flex-column">
                    <div class="mb-3 text-center">
                        <i class="fas fa-file-alt fa-3x text-primary"></i>
                    </div>
                    <h6 class="fw-bold">Python Lecture Notes</h6>
                    <p class="text-muted small flex-grow-1">Complete notes covering Python fundamentals.</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-primary">Preview</button>
                        <button class="btn btn-sm btn-primary">Download</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Another -->
        <div class="col-md-4 resource-card" data-course="webdev">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body d-flex flex-column">
                    <div class="mb-3 text-center">
                        <i class="fas fa-file-pdf fa-3x text-danger"></i>
                    </div>
                    <h6 class="fw-bold">HTML & CSS PDF Guide</h6>
                    <p class="text-muted small flex-grow-1">Quick reference guide for web fundamentals.</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-primary">Preview</button>
                        <button class="btn btn-sm btn-primary">Download</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Another -->
        <div class="col-md-4 resource-card" data-course="datasci">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body d-flex flex-column">
                    <div class="mb-3 text-center">
                        <i class="fas fa-file-powerpoint fa-3x text-warning"></i>
                    </div>
                    <h6 class="fw-bold">Data Science Slides</h6>
                    <p class="text-muted small flex-grow-1">Slides from Data Science with R course lectures.</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-primary">Preview</button>
                        <button class="btn btn-sm btn-primary">Download</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bonus Content -->
        <div class="col-md-4 resource-card" data-course="webdev">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body d-flex flex-column">
                    <div class="mb-3 text-center">
                        <i class="fas fa-gift fa-3x text-success"></i>
                    </div>
                    <h6 class="fw-bold">JavaScript Cheat Sheet</h6>
                    <p class="text-muted small flex-grow-1">Handy cheat sheet for fast learning and reference.</p>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-sm btn-outline-primary">Preview</button>
                        <button class="btn btn-sm btn-primary">Download</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/resources-page.js') }}"></script>
@endpush
