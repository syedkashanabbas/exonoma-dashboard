<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class DashboardController extends Controller
{

public function dashboard()
{
    $user = Auth::user();

    return view('dashboard', [
        'name' => $user->name,
    ]);
}
public function plans()
{

    return view('dashboard.plans');
}
public function aiSignals()
{
    return view('dashboard.ai-signals');
}
public function riskHedging()
{
    return view('dashboard.risk-hedging');
}

public function transactionsHistory()
{
    return view('dashboard.transactions-history');
}
public function performanceAnalytics()
{
    return view('dashboard.performance-analytics');
}
public function reportsCompliance()
{
    return view('dashboard.reports-compliance');
}
public function notificationsCenter()
{
    return view('dashboard.notifications-center');
}

public function multiAccount()
{
    return view('dashboard.multi-account');
}

public function marketDashboard()
{
    // Crypto instant stats
    $crypto = Http::withoutVerifying()->get('https://api.coingecko.com/api/v3/simple/price', [
        'ids' => 'bitcoin,ethereum,cardano',
        'vs_currencies' => 'usd',
        'include_24hr_change' => 'true'
    ])->json();

    // Crypto history (BTC & ETH 7d)
    $btcHistory = Http::withoutVerifying()->get(
        'https://api.coingecko.com/api/v3/coins/bitcoin/market_chart',
        ['vs_currency' => 'usd','days' => 7]
    )->json();

    $ethHistory = Http::withoutVerifying()->get(
        'https://api.coingecko.com/api/v3/coins/ethereum/market_chart',
        ['vs_currency' => 'usd','days' => 7]
    )->json();

    // Stock (AAPL + TSLA stats)
    $aapl = Http::withoutVerifying()->get('https://www.alphavantage.co/query', [
        'function' => 'GLOBAL_QUOTE','symbol' => 'AAPL','apikey' => env('ALPHA_VANTAGE_KEY')
    ])->json();

    $tsla = Http::withoutVerifying()->get('https://www.alphavantage.co/query', [
        'function' => 'GLOBAL_QUOTE','symbol' => 'TSLA','apikey' => env('ALPHA_VANTAGE_KEY')
    ])->json();

    // Stock history (AAPL 7 days)
    $aaplHistory = Http::withoutVerifying()->get('https://www.alphavantage.co/query', [
        'function' => 'TIME_SERIES_DAILY','symbol' => 'AAPL','apikey' => env('ALPHA_VANTAGE_KEY')
    ])->json();

    // Commodities & Forex placeholders (could also be Alpha Vantage)
    $commodities = ['gold' => 1925.40,'oil'  => 72.85];
    $forex = ['usd_eur' => 0.91,'usd_jpy' => 147.25];

    return view('dashboard.market-dashboard', compact(
        'crypto','aapl','tsla','commodities','forex','btcHistory','ethHistory','aaplHistory'
    ));
}




}
