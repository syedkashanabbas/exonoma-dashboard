@extends('layouts.layout1')

@section('title', 'Academy | Learning Path')

@section('content')
<div id="learningPath" class="py-5 container-fluid" style="min-height:100vh; overflow:hidden;">

    <!-- Header -->
    <div class="mb-5 row">
        <div class="text-center col-12">
            <h1 class="fw-bold">Your Learning Path</h1>
            <p class="text-muted">A curated roadmap to guide your growth from beginner to expert</p>
        </div>
    </div>

    <!-- Roadmap Wrapper -->
    <div class="mx-auto roadmap position-relative" style="max-width:900px;">
        <!-- Path line -->
        <div class="top-0 position-absolute start-50 translate-middle-x h-100" 
             style="width:6px; background:linear-gradient(#667eea,#764ba2); border-radius:4px;"></div>

        <!-- Milestone 1 -->
        <div class="mb-5 milestone row align-items-center" data-step="1">
            <div class="col-md-6 text-end pe-5">
                <h4 class="fw-bold">Beginner</h4>
                <p class="text-muted">Get started with fundamentals and basics</p>
            </div>
            <div class="col-md-6">
                <div class="border-0 shadow-sm card rounded-4">
                    <img src="https://picsum.photos/seed/beginner/500/250" class="card-img-top rounded-top-4">
                    <div class="card-body">
                        <h6 class="fw-bold">Intro to Programming</h6>
                        <div class="my-2 progress rounded-pill" style="height:6px;">
                            <div class="progress-bar bg-success" style="width:60%"></div>
                        </div>
                        <small class="text-muted">60% Completed</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Milestone 2 -->
        <div class="flex-row-reverse mb-5 milestone row align-items-center" data-step="2">
            <div class="col-md-6 ps-5">
                <h4 class="fw-bold">Intermediate</h4>
                <p class="text-muted">Level up with frameworks and applied skills</p>
            </div>
            <div class="col-md-6">
                <div class="border-0 shadow-sm card rounded-4">
                    <img src="https://picsum.photos/seed/intermediate/500/250" class="card-img-top rounded-top-4">
                    <div class="card-body">
                        <h6 class="fw-bold">Web Development Bootcamp</h6>
                        <div class="my-2 progress rounded-pill" style="height:6px;">
                            <div class="progress-bar bg-info" style="width:30%"></div>
                        </div>
                        <small class="text-muted">30% Completed</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Milestone 3 -->
        <div class="mb-5 milestone row align-items-center" data-step="3">
            <div class="col-md-6 text-end pe-5">
                <h4 class="fw-bold">Advanced</h4>
                <p class="text-muted">Mastery with real-world projects and advanced topics</p>
            </div>
            <div class="col-md-6">
                <div class="border-0 shadow-sm card rounded-4">
                    <img src="https://picsum.photos/seed/advanced/500/250" class="card-img-top rounded-top-4">
                    <div class="card-body">
                        <h6 class="fw-bold">Advanced Data Science & AI</h6>
                        <div class="my-2 progress rounded-pill" style="height:6px;">
                            <div class="progress-bar bg-danger" style="width:10%"></div>
                        </div>
                        <small class="text-muted">Just Getting Started</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Milestone 4 -->
        <div class="flex-row-reverse milestone row align-items-center" data-step="4">
            <div class="col-md-6 ps-5">
                <h4 class="fw-bold">Expert</h4>
                <p class="text-muted">Capstone projects & industry-level expertise</p>
            </div>
            <div class="col-md-6">
                <div class="border-0 shadow-sm card rounded-4">
                    <img src="https://picsum.photos/seed/expert/500/250" class="card-img-top rounded-top-4">
                    <div class="card-body">
                        <h6 class="fw-bold">Capstone Project Showcase</h6>
                        <div class="my-2 progress rounded-pill" style="height:6px;">
                            <div class="progress-bar bg-warning" style="width:0%"></div>
                        </div>
                        <small class="text-muted">Locked – Complete previous levels first</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="{{ asset('assets/js/learning-path-page.js') }}"></script>
@endpush
