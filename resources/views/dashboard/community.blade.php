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
                <h5 class="fw-bold mb-0">{{ $totalCommunity }}</h5>
            </div>
            <div class="flex-fill py-3">
                <h6 class="fw-semibold mb-1">Your First Line</h6>
                <h5 class="fw-bold mb-0">{{ $firstLine }}</h5>
            </div>
            <div class="flex-fill py-3">
                <h6 class="fw-semibold mb-1">Total Amount of MBR</h6>
                <h5 class="fw-bold mb-0">{{ $totalMBR }} SGPU</h5>
            </div>
            <div class="flex-fill py-3">
                <h6 class="fw-semibold mb-1">Total Revenue Generated from Start</h6>
                <h5 class="fw-bold mb-0">{{ $totalRevenue }} SGPU</h5>
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
                        <input type="text" class="form-control" value="{{ $user->referral_code }}" readonly>
                        <button class="btn btn-outline-secondary copy-btn" data-value="{{ $user->referral_code }}">Copy</button>
                    </div>
                </div>
                <div class="col-md-5">
                    <label class="form-label small mb-1">Referral Link</label>
                    <div class="input-group">
                        <input type="text" class="form-control" value="{{ $referralLink }}" readonly>
                        <button class="btn btn-outline-secondary copy-btn" data-value="{{ $referralLink }}">Copy</button>
                    </div>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-4">
                    <button class="btn btn-primary btn-sm me-2" onclick="shareLink('{{ $referralLink }}')">Share</button>
                    <button class="btn btn-outline-primary btn-sm">QR Code</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Tree Members Section --}}
    <div class="card border-0 shadow-sm">
        <div class="card-body text-center">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-semibold mb-0">Your Tree Members</h6>
                
            </div>

            <div class="tree-wrapper">
                @forelse ($referrals as $index => $m)
                    <div class="tree-node position-relative">
                        <div class="member-card text-start p-3 shadow-sm rounded">
                            <div class="d-flex align-items-center">
                                <img src="https://www.svgrepo.com/show/382109/male-avatar-boy-face-man-user-7.svg" 
                                     class="rounded-circle me-3 member-img" alt="User Avatar">
                                <div>
                                    <p class="fw-semibold mb-0">
                                        {{ Str::limit($m->email, 18) }}
                                        </p>

                      
                                </div>
                            </div>
                        </div>

                        @if($index < count($referrals) - 1)
                            <div class="connector"></div>
                        @endif
                    </div>
                @empty
                    <p class="text-muted mt-3">No referrals yet.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Top Overview Gradient Section */
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

/* Member Cards */
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
    box-shadow: 0 10px 22px rgba(0,0,0,0.1);
}
.member-img {
    width: 45px;
    height: 45px;
    object-fit: cover;
}

/* Connector Lines */
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

/* Buttons */
.btn-primary {
    background: linear-gradient(135deg, #0043a8, #007bff);
    border: none;
}
.btn-primary:hover {
    background: linear-gradient(135deg, #003b95, #006ae0);
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll('.copy-btn').forEach(btn => {
        btn.addEventListener('click', async () => {
            const value = btn.getAttribute('data-value');
            await navigator.clipboard.writeText(value);
            const original = btn.textContent;
            btn.textContent = 'Copied!';
            btn.classList.add('btn-success');
            btn.classList.remove('btn-outline-secondary');
            setTimeout(() => {
                btn.textContent = original;
                btn.classList.remove('btn-success');
                btn.classList.add('btn-outline-secondary');
            }, 2000);
        });
    });
});
</script>
@endpush
