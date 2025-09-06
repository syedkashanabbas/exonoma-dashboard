@extends('layouts.layout1')

@section('title', 'Multi-Account Management')

@section('content')
<style>
    .card {
        border-radius: 16px;
        background: rgba(255,255,255,0.95);
        backdrop-filter: blur(8px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.05);
        transition: all .3s ease;
    }
    .card:hover { transform: translateY(-3px); }
    .nav-pills .nav-link.active { background: linear-gradient(90deg,#0d6efd,#6610f2); }
    .account-card { border-left: 5px solid #0d6efd; }
    .activity-feed li { border-left: 3px solid #0d6efd; padding-left: 10px; }
</style>

<div class="py-4 container-fluid">

    <!-- Header -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <div>
            <h2 class="fw-bold">Multi-Account Management</h2>
            <p class="text-muted">Manage multiple client accounts as an advisor or partner</p>
        </div>
        <div class="gap-2 d-flex">
            <button class="btn btn-primary"><i class="fas fa-user-plus me-2"></i> Add New Client</button>
            <button class="btn btn-outline-secondary"><i class="fas fa-envelope me-2"></i> Invite Partner</button>
        </div>
    </div>

    <!-- Tabs -->
    <ul class="mb-4 nav nav-pills" id="accountTabs">
        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#myClients">My Clients</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#shared">Shared with Me</a></li>
        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#invitations">Invitations</a></li>
    </ul>

    <div class="tab-content">
        <!-- My Clients -->
        <div class="tab-pane fade show active" id="myClients">
            <div class="mb-4 card">
                <div class="bg-white border-0 card-header d-flex justify-content-between align-items-center">
                    <h6 class="mb-0 fw-bold">Client Accounts</h6>
                    <input type="text" class="form-control form-control-sm w-25" placeholder="Search clients...">
                </div>
                <div class="card-body">
                    <table class="table align-middle table-hover">
                        <thead>
                            <tr><th>Name</th><th>Email</th><th>Status</th><th>Last Login</th><th>Actions</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td><td>john@example.com</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>Sep 5, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">Switch</button>
                                    <button class="btn btn-sm btn-outline-secondary">View</button>
                                    <button class="btn btn-sm btn-outline-danger">Suspend</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Jane Smith</td><td>jane@example.com</td>
                                <td><span class="badge bg-danger">Suspended</span></td>
                                <td>Aug 30, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary">Switch</button>
                                    <button class="btn btn-sm btn-outline-secondary">View</button>
                                    <button class="btn btn-sm btn-outline-success">Re-activate</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Shared with Me -->
        <div class="tab-pane fade" id="shared">
            <div class="mb-4 card">
                <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Shared Accounts</h6></div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="p-3 card account-card">
                                <h5 class="fw-bold">Acme Corp</h5>
                                <p class="text-muted small">Shared by: Admin</p>
                                <button class="btn btn-sm btn-outline-primary">Access</button>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3 card account-card">
                                <h5 class="fw-bold">Global Traders</h5>
                                <p class="text-muted small">Shared by: Partner01</p>
                                <button class="btn btn-sm btn-outline-primary">Access</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invitations -->
        <div class="tab-pane fade" id="invitations">
            <div class="mb-4 card">
                <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Pending Invitations</h6></div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Advisor invite sent to mike@advisors.com
                            <div>
                                <button class="btn btn-sm btn-success">Resend</button>
                                <button class="btn btn-sm btn-danger">Cancel</button>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Partner invite sent to sarah@partners.com
                            <div>
                                <button class="btn btn-sm btn-success">Resend</button>
                                <button class="btn btn-sm btn-danger">Cancel</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="mb-4 card">
        <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Recent Activity</h6></div>
        <div class="card-body">
            <ul class="list-group activity-feed">
                <li class="list-group-item">[09:10] John Doe account switched by Admin</li>
                <li class="list-group-item">[09:00] Invitation sent to mike@advisors.com</li>
                <li class="list-group-item">[08:45] Jane Smith account suspended</li>
            </ul>
        </div>
    </div>

    <!-- Permissions Matrix -->
    <div class="card">
        <div class="bg-white border-0 card-header"><h6 class="mb-0 fw-bold">Permissions Matrix</h6></div>
        <div class="card-body">
            <table class="table text-center table-bordered">
                <thead><tr><th>Role</th><th>View</th><th>Edit</th><th>Switch</th><th>Suspend</th></tr></thead>
                <tbody>
                    <tr><td>Advisor</td><td>✔️</td><td>✔️</td><td>✔️</td><td>❌</td></tr>
                    <tr><td>Partner</td><td>✔️</td><td>✔️</td><td>❌</td><td>❌</td></tr>
                    <tr><td>Admin</td><td>✔️</td><td>✔️</td><td>✔️</td><td>✔️</td></tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
