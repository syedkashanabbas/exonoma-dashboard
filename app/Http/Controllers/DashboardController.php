<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

}
