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
    $alphaKey = env('ALPHA_VANTAGE_KEY');
    $fmpKey = env('FMP_API_KEY');

    // Crypto
    $crypto = Http::withoutVerifying()->get('https://api.coingecko.com/api/v3/simple/price', [
        'ids' => 'bitcoin,ethereum,cardano',
        'vs_currencies' => 'usd',
        'include_24hr_change' => 'true'
    ])->json();

    // Crypto history
    $btcHistory = Http::withoutVerifying()->get('https://api.coingecko.com/api/v3/coins/bitcoin/market_chart', [
        'vs_currency' => 'usd', 'days' => 7
    ])->json();

    $ethHistory = Http::withoutVerifying()->get('https://api.coingecko.com/api/v3/coins/ethereum/market_chart', [
        'vs_currency' => 'usd', 'days' => 7
    ])->json();

    // Stocks
    $aapl = Http::withoutVerifying()->get('https://www.alphavantage.co/query', [
        'function' => 'GLOBAL_QUOTE', 'symbol' => 'AAPL', 'apikey' => $alphaKey
    ])->json();

    $tsla = Http::withoutVerifying()->get('https://www.alphavantage.co/query', [
        'function' => 'GLOBAL_QUOTE', 'symbol' => 'TSLA', 'apikey' => $alphaKey
    ])->json();

    $aaplHistory = Http::withoutVerifying()->get('https://www.alphavantage.co/query', [
        'function' => 'TIME_SERIES_DAILY', 'symbol' => 'AAPL', 'apikey' => $alphaKey
    ])->json();

    // Commodities (FMP stable endpoints)
    $goldRes = Http::withoutVerifying()->get('https://financialmodelingprep.com/stable/quote', [
        'symbol' => 'GCUSD',
        'apikey' => $fmpKey
    ])->json();

    $oilRes = Http::withoutVerifying()->get('https://financialmodelingprep.com/stable/quote', [
        'symbol' => 'CLUSD',
        'apikey' => $fmpKey
    ])->json();

    $commodities = [
        'gold' => $goldRes[0]['price'] ?? 'N/A',
        'oil'  => $oilRes[0]['price'] ?? 'N/A'
    ];

    // Forex (FMP stable single-quote endpoints)
    $usdEurRes = Http::withoutVerifying()->get('https://financialmodelingprep.com/stable/quote', [
        'symbol' => 'USDEUR',
        'apikey' => $fmpKey
    ])->json();

    $usdJpyRes = Http::withoutVerifying()->get('https://financialmodelingprep.com/stable/quote', [
        'symbol' => 'USDJPY',
        'apikey' => $fmpKey
    ])->json();

    $forex = [
        'usd_eur' => $usdEurRes[0]['price'] ?? 'N/A',
        'usd_jpy' => $usdJpyRes[0]['price'] ?? 'N/A'
    ];

    return view('dashboard.market-dashboard', compact(
        'crypto','aapl','tsla','commodities','forex','btcHistory','ethHistory','aaplHistory'
    ));
}




public function userSecurity()
{
    return view('dashboard.user-security');
}
public function supportHelp()
{
    return view('dashboard.support-help');
}
public function mlm()
{
    return view('dashboard.mlm');
}

public function integrations()
{
    return view('dashboard.integrations');

}
public function shop()
{
    return view('dashboard.shop');

}
public function community()
{
    return view('dashboard.community');

}
public function connectMetaTrader()
{
    return view('dashboard.connect-meta-trader');

}
public function commission()
{
    return view('dashboard.commission');

}
}