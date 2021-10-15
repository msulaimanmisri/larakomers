<?php

namespace App\Http\Controllers\Admin;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $pending = Invoice::where('status', 'pending')->count();

        return view('dashboard.index', compact('pending'));
    }
}