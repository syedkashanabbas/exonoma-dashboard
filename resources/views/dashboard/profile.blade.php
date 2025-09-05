@extends('layouts.layout1')

@section('title', 'Academy | Profile & Settings')

@section('content')
<div class="py-5 container-fluid" style="background:#f5f7fb; min-height:100vh;">

    <!-- Profile Header -->
    <div class="mb-5 row">
        <div class="col-12">
            <div class="p-4 bg-white shadow-sm rounded-4 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="https://picsum.photos/seed/student/120/120" class="rounded-circle me-3" width="80" height="80" alt="User">
                    <div>
                        <h4 class="mb-0 fw-bold">{{ Auth::user()->name ?? 'John Doe' }}</h4>
                        <p class="mb-0 text-muted">Student at Academy</p>
                    </div>
                </div>
                <button class="btn btn-primary">Edit Profile</button>
            </div>
        </div>
    </div>

    <!-- Bio -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-4 bg-white shadow-sm rounded-4">
                <h5 class="mb-3 fw-bold">Bio</h5>
                <p class="text-muted">I’m passionate about coding, learning new technologies, and preparing for tech interviews. My goal is to become a full-stack developer 🚀</p>
            </div>
        </div>
    </div>

    <!-- Enrolled Categories -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-4 bg-white shadow-sm rounded-4">
                <h5 class="mb-3 fw-bold">Enrolled Categories</h5>
                <div class="flex-wrap gap-2 d-flex">
                    <span class="p-2 px-3 badge rounded-pill bg-primary">Python</span>
                    <span class="p-2 px-3 badge rounded-pill bg-success">Web Development</span>
                    <span class="p-2 px-3 badge rounded-pill bg-warning text-dark">Data Science</span>
                    <span class="p-2 px-3 badge rounded-pill bg-info">AI & ML</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Goals -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-4 bg-white shadow-sm rounded-4">
                <h5 class="mb-3 fw-bold">Goals</h5>
                <p class="mb-1">Complete 3 courses this month</p>
                <div class="mb-3 progress" style="height:12px;">
                    <div class="progress-bar bg-success" style="width:60%"></div>
                </div>
                <p class="mb-1">Daily Coding Practice</p>
                <div class="mb-3 progress" style="height:12px;">
                    <div class="progress-bar bg-info" style="width:40%"></div>
                </div>
                <p class="mb-1">Earn Advanced Certificate</p>
                <div class="progress" style="height:12px;">
                    <div class="progress-bar bg-warning" style="width:20%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Preferences -->
    <div class="mb-4 row">
        <div class="col-12">
            <div class="p-4 bg-white shadow-sm rounded-4">
                <h5 class="mb-3 fw-bold">Preferences</h5>
                <div class="mb-2 form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="darkModeSwitch">
                    <label class="form-check-label" for="darkModeSwitch">Dark Mode</label>
                </div>
                <div class="mb-2 form-check form-switch">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">Email Notifications</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" checked>
                    <label class="form-check-label">Course Reminders</label>
                </div>
            </div>
        </div>
    </div>

    <!-- Progress Badges -->
    <div class="mb-5 row">
        <div class="col-12">
            <div class="p-4 bg-white shadow-sm rounded-4">
                <h5 class="mb-3 fw-bold">Progress Badges</h5>
                <div class="flex-wrap gap-3 d-flex">
                    <span class="p-3 badge rounded-pill bg-primary">🏆 Top Scorer</span>
                    <span class="p-3 badge rounded-pill bg-success">🔥 Streak Master</span>
                    <span class="p-3 badge rounded-pill bg-warning text-dark">📚 Consistent Learner</span>
                    <span class="p-3 badge rounded-pill bg-info">💡 Innovator</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="row">
        <div class="text-center col-12">
            <button class="btn btn-lg btn-primary me-2">Update Profile</button>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-lg btn-outline-danger">Logout</button>
            </form>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/profile-page.js') }}"></script>
@endpush
