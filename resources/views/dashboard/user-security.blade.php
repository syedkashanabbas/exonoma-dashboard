@extends('layouts.layout1')

@section('title','User & Security')

@section('content')
<div class="py-5 container-fluid">

    <!-- Page Heading -->
    <div class="mb-5">
        <h1 class="mb-2 fw-bold display-5">User & Security</h1>
        <p class="lead text-muted">Control your account safety, identity verification and authentication methods.</p>
    </div>

    <!-- Security Score -->
    <section class="mb-5">
        <h2 class="pb-2 mb-3 fw-bold border-bottom">Overall Security Score</h2>
        <div class="row align-items-center">
            <div class="text-center col-md-4">
                <div style="width:160px;height:160px;margin:auto;position:relative;">
                    <canvas id="securityScore"></canvas>
                    <span id="scoreText" class="fw-bold" style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);font-size:1.5rem;">78%</span>
                </div>
            </div>
            <div class="col-md-8">
                <p class="fs-5 text-muted">Your account is moderately secure. Enable 2FA and complete KYC to achieve a higher protection level.</p>
                <button class="px-4 btn btn-lg btn-success"><i class="fas fa-shield-alt me-2"></i>Improve Security</button>
            </div>
        </div>
    </section>

    <!-- KYC -->
    <section class="mb-5">
        <h2 class="pb-2 mb-3 fw-bold border-bottom">KYC Verification</h2>
        <div class="flex-wrap d-flex justify-content-between">
            <div>
                <p class="mb-1 fs-5">Status: <span class="badge bg-warning text-dark fs-6">Pending</span></p>
                <p class="text-muted">Verify your identity to unlock higher transaction limits and advanced features.</p>
            </div>
            <button class="btn btn-lg btn-primary"><i class="fas fa-upload me-2"></i> Upload Documents</button>
        </div>
    </section>

  

    <!-- 2FA -->
    <section class="mb-5">
        <h2 class="pb-2 mb-3 fw-bold border-bottom">Two-Factor Authentication</h2>
        <p class="fs-5 text-muted">Add an extra layer of protection using authenticator apps or SMS codes.</p>
        <div class="mt-3 d-flex align-items-center">
            <div class="form-check form-switch fs-5">
                <input class="form-check-input" type="checkbox" id="enable2FA">
                <label class="form-check-label" for="enable2FA">Enable 2FA</label>
            </div>
            <button class="btn btn-outline-primary btn-lg ms-4"><i class="fas fa-qrcode me-2"></i> Setup Now</button>
        </div>
    </section>

    <!-- Account Settings -->
    <section class="mb-5">
        <h2 class="pb-2 mb-3 fw-bold border-bottom">Account Settings</h2>
        <form class="row g-4 fs-5">
            <div class="col-md-6">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control form-control-lg" value="John Doe">
            </div>
            <div class="col-md-6">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control form-control-lg" value="john@example.com">
            </div>
            <div class="col-md-6">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control form-control-lg" value="+1 555 1234">
            </div>
            <div class="col-md-6">
                <label class="form-label">Password</label>
                <input type="password" class="form-control form-control-lg" placeholder="••••••••">
            </div>
            <div class="col-12">
                <button class="px-5 btn btn-success btn-lg"><i class="fas fa-save me-2"></i> Save Changes</button>
            </div>
        </form>
    </section>

    <!-- Active Devices -->
    <section class="mb-5">
        <h2 class="pb-2 mb-3 fw-bold border-bottom">Active Devices</h2>
        <ul class="list-group fs-5">
            <li class="list-group-item d-flex justify-content-between">
                <span><i class="fas fa-laptop me-2 text-primary"></i> Chrome on Windows 10</span>
                <span class="text-muted">Last active: 2 mins ago</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                <span><i class="fas fa-mobile-alt me-2 text-success"></i> iPhone 14 Pro</span>
                <span class="text-muted">Last active: 1 hr ago</span>
            </li>
        </ul>
    </section>

    <!-- Security Logs -->
    <section>
        <h2 class="pb-2 mb-3 fw-bold border-bottom">Security Activity Logs</h2>
        <ul class="list-group fs-5">
            <li class="list-group-item"><i class="fas fa-sign-in-alt text-success me-2"></i> [09:45] Login from Chrome on Windows</li>
            <li class="list-group-item"><i class="fas fa-exclamation-triangle text-danger me-2"></i> [09:10] 2FA attempt failed</li>
            <li class="list-group-item"><i class="fas fa-key text-info me-2"></i> [08:50] Password changed successfully</li>
            <li class="list-group-item"><i class="fas fa-id-card text-primary me-2"></i> [Aug 30] KYC submitted</li>
        </ul>
    </section>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded",function(){
    let ctx = document.getElementById('securityScore').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [78, 22],
                backgroundColor: ['#0d6efd','#e9ecef'],
                borderWidth: 0,
                cutout: '70%'
            }]
        },
        options: { plugins:{ legend:{display:false}, tooltip:{enabled:false} } }
    });
});
</script>
@endpush
