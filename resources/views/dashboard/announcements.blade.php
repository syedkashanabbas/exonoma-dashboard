@extends('layouts.layout1')

@section('title', 'Academy | Announcements')

@section('content')
<div class="py-5 container-fluid" style="background:#f9f9fb; min-height:100vh;">

    <!-- Header -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-5 text-white shadow-sm rounded-4"
                 style="background: linear-gradient(135deg,#ff512f,#dd2476);">
                <h1 class="mb-2 fw-bold">Announcements</h1>
                <p class="mb-0">Stay updated with the latest news, events, and updates</p>
            </div>
        </div>
    </div>

    <!-- Urgent Announcement Banner -->
    <div class="mb-5 row">
        <div class="col-12">
            <div class="p-4 text-center shadow-sm rounded-4 bg-warning text-dark">
                <h5 class="mb-1 fw-bold">⚠️ Mid-Term Exams start from Sept 15th</h5>
                <p class="mb-0">Prepare your schedule accordingly. Detailed timetable will be shared soon.</p>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="mb-4 row">
        <div class="flex-wrap gap-2 col-12 d-flex">
            <button class="btn btn-outline-primary filter-btn" data-filter="all">All</button>
            <button class="btn btn-outline-success filter-btn" data-filter="exam">Exams</button>
            <button class="btn btn-outline-info filter-btn" data-filter="event">Events</button>
            <button class="btn btn-outline-secondary filter-btn" data-filter="update">Updates</button>
        </div>
    </div>

    <!-- Announcement Cards -->
    <div id="announcementWrapper" class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-6 announcement-card" data-category="exam">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body">
                    <h6 class="fw-bold">Exam Timetable Release</h6>
                    <p class="text-muted small">Posted: Sept 1, 2025</p>
                    <p class="small">The exam timetable for Fall semester will be released by Sept 10th...</p>
                    <button class="btn btn-sm btn-outline-primary">Read More</button>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 announcement-card" data-category="event">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body">
                    <h6 class="fw-bold">Webinar: AI in Education</h6>
                    <p class="text-muted small">Posted: Aug 28, 2025</p>
                    <p class="small">Join us for a live webinar with industry experts discussing the role of AI...</p>
                    <button class="btn btn-sm btn-outline-primary">Register</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 announcement-card" data-category="update">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body">
                    <h6 class="fw-bold">Library Hours Extended</h6>
                    <p class="text-muted small">Posted: Aug 20, 2025</p>
                    <p class="small">The library will now remain open till 10 PM on weekdays to support students...</p>
                    <button class="btn btn-sm btn-outline-primary">Details</button>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6 announcement-card" data-category="event">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body">
                    <h6 class="fw-bold">Hackathon 2025</h6>
                    <p class="text-muted small">Posted: Aug 10, 2025</p>
                    <p class="small">Get ready for 48 hours of coding, creativity, and collaboration in our annual...</p>
                    <button class="btn btn-sm btn-outline-primary">Join Now</button>
                </div>
            </div>
        </div>

    </div>

    <!-- Upcoming Event -->
    <div class="mt-5 row">
        <div class="col-12">
            <div class="p-4 text-center bg-white shadow-sm rounded-4">
                <h4 class="fw-bold">🎉 Hackathon 2025</h4>
                <p class="mb-2 text-muted">Starts in: <span id="countdown" class="fw-bold text-primary"></span></p>
                <button class="btn btn-lg btn-primary">Register Now</button>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/announcements-page.js') }}"></script>
@endpush
