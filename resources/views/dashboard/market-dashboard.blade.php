@extends('layouts.layout1')

@section('title','Market Dashboard')

@section('content')
<div class="py-4 container-fluid">
    <h2 class="fw-bold">Market Dashboard</h2>
    <p class="text-muted">Stocks, crypto, forex & commodities overview</p>

    <!-- Crypto Cards -->
    <div class="mb-4 row g-4">
        @foreach(['bitcoin'=>'BTC','ethereum'=>'ETH','cardano'=>'ADA'] as $key=>$label)
        <div class="col-md-4">
            <div class="p-3 card">
                <h6>{{ ucfirst($key) }} ({{ $label }})</h6>
                <h3 class="fw-bold">${{ $crypto[$key]['usd'] ?? 'N/A' }}</h3>
                <small class="{{ ($crypto[$key]['usd_24h_change'] ?? 0) >= 0 ? 'text-success' : 'text-danger' }}">
                    {{ round($crypto[$key]['usd_24h_change'] ?? 0,2) }}%
                </small>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Stocks -->
    <div class="mb-4 row g-4">
        <div class="col-md-6"><div class="p-3 card"><h6>Apple (AAPL)</h6><h3 class="fw-bold">${{ $aapl['Global Quote']['05. price'] ?? 'N/A' }}</h3><small>Change: {{ $aapl['Global Quote']['09. change'] ?? '0' }}</small></div></div>
        <div class="col-md-6"><div class="p-3 card"><h6>Tesla (TSLA)</h6><h3 class="fw-bold">${{ $tsla['Global Quote']['05. price'] ?? 'N/A' }}</h3><small>Change: {{ $tsla['Global Quote']['09. change'] ?? '0' }}</small></div></div>
    </div>

    <!-- Forex + Commodities -->
    <div class="mb-4 row g-4">
        <div class="col-md-3"><div class="p-3 card"><h6>USD/EUR</h6><h3>{{ $forex['usd_eur'] }}</h3></div></div>
        <div class="col-md-3"><div class="p-3 card"><h6>USD/JPY</h6><h3>{{ $forex['usd_jpy'] }}</h3></div></div>
        <div class="col-md-3"><div class="p-3 card"><h6>Gold (oz)</h6><h3>${{ $commodities['gold'] }}</h3></div></div>
        <div class="col-md-3"><div class="p-3 card"><h6>Oil (barrel)</h6><h3>${{ $commodities['oil'] }}</h3></div></div>
    </div>

    <!-- Charts -->
    <div class="row g-4">
        <div class="col-lg-6"><div class="p-3 card"><h6 class="fw-bold">BTC 7-Day Trend</h6><canvas id="btcChart"></canvas></div></div>
        <div class="col-lg-6"><div class="p-3 card"><h6 class="fw-bold">ETH 7-Day Trend</h6><canvas id="ethChart"></canvas></div></div>
    </div>

    <div class="mt-3 row g-4">
        <div class="col-lg-6"><div class="p-3 card"><h6 class="fw-bold">AAPL Stock (Daily)</h6><canvas id="aaplChart"></canvas></div></div>
        <div class="col-lg-6"><div class="p-3 card"><h6 class="fw-bold">Crypto Market Share</h6><canvas id="cryptoPie"></canvas></div></div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function(){
    // BTC Chart
   let btcLabels = {!! json_encode(array_map(
    fn($d)=>date('M d',$d[0]/1000),
    $btcHistory['prices'] ?? []
)) !!};

let btcPrices = {!! json_encode(array_map(
    fn($d)=>$d[1],
    $btcHistory['prices'] ?? []
)) !!};

    new Chart(document.getElementById('btcChart'), {
        type:'line',
        data:{ labels: btcLabels, datasets:[{ label:'BTC/USD', data: btcPrices, borderColor:'#f2a900', fill:true, tension:0.4 }] }
    });

    // ETH Chart
    let ethLabels = {!! json_encode(array_map(fn($d)=>date('M d',$d[0]/1000), $ethHistory['prices'])) !!};
    let ethPrices = {!! json_encode(array_map(fn($d)=>$d[1], $ethHistory['prices'])) !!};
    new Chart(document.getElementById('ethChart'), {
        type:'line',
        data:{ labels: ethLabels, datasets:[{ label:'ETH/USD', data: ethPrices, borderColor:'#3c3c3d', fill:true, tension:0.4 }] }
    });

    // AAPL Chart
    let aaplRaw = {!! json_encode($aaplHistory['Time Series (Daily)'] ?? []) !!};
    let aaplLabels = Object.keys(aaplRaw).slice(0,7).reverse();
    let aaplPrices = aaplLabels.map(d => parseFloat(aaplRaw[d]['4. close']));
    new Chart(document.getElementById('aaplChart'), {
        type:'bar',
        data:{ labels: aaplLabels, datasets:[{ label:'AAPL Close', data: aaplPrices, backgroundColor:'#0d6efd' }] }
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
});
</script>
@endpush
