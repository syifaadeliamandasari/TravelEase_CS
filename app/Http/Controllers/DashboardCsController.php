<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardCsController extends Controller
{
    public function index()
    {
        return view('Dashboard.dashboardcs');
    }
}
