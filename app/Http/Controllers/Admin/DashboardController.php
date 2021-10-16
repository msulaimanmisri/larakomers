<?php

namespace App\Http\Controllers\Admin;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Year & Month
        $year = date('Y');
        $month = date('m');

        // Sales
        $monthlyRevenue = Invoice::where('status', 'success')->whereMonth('created_at', '=', $month)->whereYear('created_at', '=', $year)->sum('grand_total');

        // Sales Status
        $pending = Invoice::where('status', 'pending')->count();

        return view('dashboard.index', compact('monthlyRevenue'));
    }
}