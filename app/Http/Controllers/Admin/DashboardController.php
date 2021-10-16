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

        $yearlyRevenue = Invoice::where('status', 'success')->whereYear('created_at', '=', $year)->sum('grand_total');

        $totalRevenue = Invoice::where('status', 'success')->sum('grand_total');

        // Sales Status
        $pending = Invoice::where('status', 'pending')->count();
        $success = Invoice::where('status', 'success')->count();
        $expired = Invoice::where('status', 'expired')->count();
        $failed = Invoice::where('status', 'failed')->count();

        return view('dashboard.index', compact('monthlyRevenue', 'yearlyRevenue', 'totalRevenue', 'pending', 'success', 'expired', 'failed'));
    }
}