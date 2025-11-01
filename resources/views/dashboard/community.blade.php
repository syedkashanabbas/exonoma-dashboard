@extends('layouts.layout1')

@section('title', 'Community | Exonoma')

@section('content')
<div class="container-fluid py-4">
    <h6 class="fw-bold mb-3">Community</h6>

    {{-- Overview Section --}}
    <div class="card border-0 shadow-sm mb-4 overview-card text-white">
        <div class="card-body d-flex flex-wrap justify-content-between text-center">
            <div class="flex-fill py-3">
                <h6 class="fw-semibold mb-1">Total Community Size</h6>
                <h5 class="fw-bold mb-0">2</h5>
            </div>
            <div class="flex-fill py-3">
                <h6 class="fw-semibold mb-1">Your First Line</h6>
                <h5 class="fw-bold mb-0">1</h5>
            </div>
            <div class="flex-fill py-3">
                <h6 class="fw-semibold mb-1">Total Amount of MBR</h6>
                <h5 class="fw-bold mb-0">0 SGPU</h5>
            </div>
            <div class="flex-fill py-3">
                <h6 class="fw-semibold mb-1">Total Revenue Generated from Start</h6>
                <h5 class="fw-bold mb-0">0 SGPU</h5>
            </div>
        </div>
    </div>

    {{-- Share Invitation --}}
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <h6 class="fw-semibold mb-3">Share Invitation</h6>
            <div class="row g-2 align-items-center mb-3">
                <div class="col-md-3">
                    <label class="form-label small mb-1">Referral ID</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="06556f49" readonly>
                        <button class="btn btn-outline-secondary">Copy</button>
                    </div>
                </div>
                <div class="col-md-5">
                    <label class="form-label small mb-1">Referral Link</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="https://app.exonoma.com/06556f49" readonly>
                        <button class="btn btn-outline-secondary">Copy</button>
                    </div>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-4">
                    <button class="btn btn-primary btn-sm me-2">Share</button>
                    <button class="btn btn-outline-primary btn-sm">QR Code</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Tree Members Section --}}
 {{-- Tree Members Section --}}
<div class="card border-0 shadow-sm">
    <div class="card-body text-center">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h6 class="fw-semibold mb-0">Your Tree Members</h6>
            <div>
                <button class="btn btn-outline-secondary btn-sm me-2">List View</button>
                <button class="btn btn-primary btn-sm">Tree View</button>
            </div>
        </div>

        <div class="tree-wrapper">
            @php
                $members = [
                    ['email'=>'info@heckta.it', 'status'=>'Not Qualified', 'license'=>'No License'],
                    ['email'=>'gradomain@gmail.com', 'status'=>'Not Qualified', 'license'=>'No License'],
                    ['email'=>'123@gmail.com', 'status'=>'Not Qualified', 'license'=>'No License']
                ];
            @endphp

            @foreach ($members as $index => $m)
            <div class="tree-node position-relative">
                <div class="member-card text-start p-3 shadow-sm rounded">
                    {{-- <span class="badge bg-danger position-absolute end-0 mt-2 me-3">Inactive</span> --}}
                    <div class="d-flex align-items-center">
                        <img src="https://www.svgrepo.com/show/382109/male-avatar-boy-face-man-user-7.svg" class="rounded-circle me-3 member-img" alt="DP">
                        <div>
                            <p class="fw-semibold mb-0">{{ $m['email'] }}</p>
                            <p class="small text-muted mb-0">{{ $m['status'] }}</p>
                            <p class="small text-muted mb-0">{{ $m['license'] }}</p>
                        </div>
                    </div>
                </div>

                {{-- connector line except last --}}
                @if($index < count($members) - 1)
                    <div class="connector"></div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>

</div>
@endsection

@push('styles')
<style>
/* Top Overview Dark Section */
.overview-card {
    background: linear-gradient(135deg, #001f3f, #003366, #004080);
    border-radius: 0.6rem;
}
.overview-card h6 {
    font-size: 0.9rem;
    color: #dbe2ef;
}
.overview-card h5 {
    color: #fff;
}

/* Member Card */
.member-card {
    width: 280px;
    background-color: #fff;
    transition: all 0.3s ease;
}
.member-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 22px rgba(0,0,0,0.1);
}
.member-img {
    width: 45px;
    height: 45px;
    object-fit: cover;
}

/* Buttons */
.btn-primary {
    background: linear-gradient(135deg, #0043a8, #007bff);
    border: none;
}
.btn-primary:hover {
    background: linear-gradient(135deg, #003b95, #006ae0);
}
.tree-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    padding-top: 10px;
}
.tree-node {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
}
.connector {
    width: 2px;
    height: 40px;
    background: linear-gradient(to bottom, #0043a8, #007bff);
    margin: 0 auto;
}
.member-card {
    width: 320px;
    background: #fff;
    border: 1px solid #f0f0f0;
    border-radius: 10px;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
}
.member-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.1);
}
.member-img {
    width: 45px;
    height: 45px;
    object-fit: cover;
}

</style>
@endpush
