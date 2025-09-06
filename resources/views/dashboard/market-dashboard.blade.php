@extends('layouts.layout1')

@section('title','Market Dashboard')

@section('content')
<div class="py-4 container-fluid">
    <h2 class="fw-bold">Market Dashboard</h2>
    <p class="text-muted">Stocks, crypto, forex & commodities overview</p>

    <!-- Top Row: Crypto -->
    <div class="mb-4 row g-4">
        <div class="col-md-4">
            <div class="p-3 card">
                <h6>Bitcoin (BTC)</h6>
                <h3 class="fw-bold">${{ $crypto['bitcoin']['usd'] ?? 'N/A' }}</h3>
                <small class="{{ ($crypto['bitcoin']['usd_24h_change'] ?? 0) >= 0 ? 'text-success' : 'text-danger' }}">
                    {{ round($crypto['bitcoin']['usd_24h_change'] ?? 0,2) }}%
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 card">
                <h6>Ethereum (ETH)</h6>
                <h3 class="fw-bold">${{ $crypto['ethereum']['usd'] ?? 'N/A' }}</h3>
                <small class="{{ ($crypto['ethereum']['usd_24h_change'] ?? 0) >= 0 ? 'text-success' : 'text-danger' }}">
                    {{ round($crypto['ethereum']['usd_24h_change'] ?? 0,2) }}%
                </small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 card">
                <h6>Cardano (ADA)</h6>
                <h3 class="fw-bold">${{ $crypto['cardano']['usd'] ?? 'N/A' }}</h3>
                <small class="{{ ($crypto['cardano']['usd_24h_change'] ?? 0) >= 0 ? 'text-success' : 'text-danger' }}">
                    {{ round($crypto['cardano']['usd_24h_change'] ?? 0,2) }}%
                </small>
            </div>
        </div>
    </div>

    <!-- Stocks -->
    <div class="mb-4 row g-4">
        <div class="col-md-6">
            <div class="p-3 card">
                <h6>Apple (AAPL)</h6>
                <h3 class="fw-bold">${{ $aapl['Global Quote']['05. price'] ?? 'N/A' }}</h3>
                <small>Change: {{ $aapl['Global Quote']['09. change'] ?? '0' }}</small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-3 card">
                <h6>Tesla (TSLA)</h6>
                <h3 class="fw-bold">${{ $tsla['Global Quote']['05. price'] ?? 'N/A' }}</h3>
                <small>Change: {{ $tsla['Global Quote']['09. change'] ?? '0' }}</small>
            </div>
        </div>
    </div>

    <!-- Forex + Commodities -->
    <div class="mb-4 row g-4">
        <div class="col-md-3">
            <div class="p-3 card"><h6>USD/EUR</h6><h3>{{ $forex['usd_eur'] }}</h3></div>
        </div>
        <div class="col-md-3">
            <div class="p-3 card"><h6>USD/JPY</h6><h3>{{ $forex['usd_jpy'] }}</h3></div>
        </div>
        <div class="col-md-3">
            <div class="p-3 card"><h6>Gold (oz)</h6><h3>${{ $commodities['gold'] }}</h3></div>
        </div>
        <div class="col-md-3">
            <div class="p-3 card"><h6>Oil (barrel)</h6><h3>${{ $commodities['oil'] }}</h3></div>
        </div>
    </div>

    <!-- Charts -->
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="p-3 card">
                <h6 class="fw-bold">Crypto Trend</h6>
                <canvas id="cryptoTrend"></canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-3 card">
                <h6 class="fw-bold">Stock Comparison</h6>
                <canvas id="stockBar"></canvas>
            </div>
        </div>
    </div>

    <div class="mt-3 row g-4">
        <div class="col-lg-6">
            <div class="p-3 card">
                <h6 class="fw-bold">Crypto Market Share</h6>
                <canvas id="cryptoPie"></canvas>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="p-3 card">
                <h6 class="fw-bold">Forex Volatility</h6>
                <canvas id="forexArea"></canvas>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function(){

    // Crypto Trend (dummy data)
    new Chart(document.getElementById('cryptoTrend'), {
        type: 'line',
        data: {
            labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
            datasets: [
                { label:'BTC', data:[48000,48200,47800,48500,49000,49200,49500], borderColor:'#f2a900', fill:false },
                { label:'ETH', data:[3200,3220,3180,3250,3300,3350,3400], borderColor:'#3c3c3d', fill:false }
            ]
        }
    });

    // Stock Bar
    new Chart(document.getElementById('stockBar'), {
        type:'bar',
        data:{
            labels:['AAPL','TSLA'],
            datasets:[{
                label:'Price',
                data:[{{ $aapl['Global Quote']['05. price'] ?? 0 }}, {{ $tsla['Global Quote']['05. price'] ?? 0 }}],
                backgroundColor:['#0d6efd','#dc3545']
            }]
        }
    });

    // Crypto Market Share
    new Chart(document.getElementById('cryptoPie'), {
        type:'doughnut',
        data:{
            labels:['BTC','ETH','ADA'],
            datasets:[{ 
                data:[{{ $crypto['bitcoin']['usd'] ?? 0 }}, {{ $crypto['ethereum']['usd'] ?? 0 }}, {{ $crypto['cardano']['usd'] ?? 0 }}],
                backgroundColor:['#f2a900','#3c3c3d','#0d6efd']
            }]
        }
    });

    // Forex Volatility (dummy)
    new Chart(document.getElementById('forexArea'), {
        type:'line',
        data:{
            labels:['Mon','Tue','Wed','Thu','Fri'],
            datasets:[
                {label:'USD/EUR', data:[0.9,0.91,0.915,0.92,0.918], borderColor:'#20c997', backgroundColor:'rgba(32,201,151,0.2)', fill:true},
                {label:'USD/JPY', data:[146,147,146.5,148,147.5], borderColor:'#ffc107', backgroundColor:'rgba(255,193,7,0.2)', fill:true}
            ]
        }
    });
});
</script>
@endpush
