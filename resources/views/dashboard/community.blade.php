@extends('layouts.layout1')

@section('title', 'Academy | Community & Discussions')

@section('content')
<div class="py-5 container-fluid" style="background:#f9f9fb; min-height:100vh;">

    <!-- Header -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-5 text-white shadow-sm rounded-4"
                 style="background: linear-gradient(135deg,#36d1dc,#5b86e5);">
                <h1 class="mb-2 fw-bold">Community & Discussions</h1>
                <p class="mb-0">Connect with peers, follow instructors, and stay updated</p>
            </div>
        </div>
    </div>

    <!-- Categories Tabs -->
    <div class="mb-4 row">
        <div class="flex-wrap gap-2 col-12 d-flex">
            <button class="btn btn-outline-primary filter-btn" data-filter="all">All</button>
            <button class="btn btn-outline-success filter-btn" data-filter="general">General</button>
            <button class="btn btn-outline-info filter-btn" data-filter="instructor">Instructors’ Updates</button>
            <button class="btn btn-outline-warning filter-btn" data-filter="courses">New Course Drops</button>
            <button class="btn btn-outline-danger filter-btn" data-filter="announcement">Announcements</button>
        </div>
    </div>

    <!-- Discussions Feed -->
    <div id="discussionWrapper" class="row g-4">

        <!-- Discussion Card -->
        <div class="col-md-6 discussion-card" data-category="instructor">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body">
                    <h6 class="fw-bold">[Instructor Update] New React Course Dropping Next Week</h6>
                    <p class="mb-1 text-muted small">By Jane Smith • 2h ago</p>
                    <p class="small">Excited to announce a brand-new React course covering hooks, context API, and more...</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-info">Instructors’ Updates</span>
                        <button class="btn btn-sm btn-outline-primary">Join Discussion (12)</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Another -->
        <div class="col-md-6 discussion-card" data-category="courses">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body">
                    <h6 class="fw-bold">New Data Science Bootcamp Announced 🎉</h6>
                    <p class="mb-1 text-muted small">By Admin • 1d ago</p>
                    <p class="small">Our new Data Science bootcamp is now open for enrollment. Limited seats available...</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-warning text-dark">New Course Drops</span>
                        <button class="btn btn-sm btn-outline-primary">Join Discussion (45)</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Another -->
        <div class="col-md-6 discussion-card" data-category="announcement">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body">
                    <h6 class="fw-bold">Academy-Wide Maintenance Scheduled</h6>
                    <p class="mb-1 text-muted small">By Support • 3d ago</p>
                    <p class="small">Platform maintenance will occur on Sept 20th at 1 AM. Expect minor downtime...</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-danger">Announcement</span>
                        <button class="btn btn-sm btn-outline-primary">Join Discussion (18)</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Another -->
        <div class="col-md-6 discussion-card" data-category="general">
            <div class="border-0 shadow-sm card rounded-4 h-100">
                <div class="card-body">
                    <h6 class="fw-bold">Best way to prepare for coding interviews?</h6>
                    <p class="mb-1 text-muted small">By Alice • 5d ago</p>
                    <p class="small">I’m starting prep for FAANG interviews. Any suggestions for roadmap and resources?...</p>
                    <div class="d-flex justify-content-between">
                        <span class="badge bg-success">General</span>
                        <button class="btn btn-sm btn-outline-primary">Join Discussion (60)</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Start New Discussion -->
    <div class="mt-5 row">
        <div class="text-center col-12">
            <button class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#newDiscussionModal">
                ➕ Start New Discussion
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="newDiscussionModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h5 class="modal-title">Start New Discussion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="mb-3 form-control" placeholder="Discussion Title">
                    <textarea class="mb-3 form-control" rows="4" placeholder="Write your message..."></textarea>
                    <select class="mb-3 form-select">
                        <option value="general">General</option>
                        <option value="instructor">Instructors’ Updates</option>
                        <option value="courses">New Course Drops</option>
                        <option value="announcement">Announcements</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary">Post Discussion</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/community-page.js') }}"></script>
@endpush
