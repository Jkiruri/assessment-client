<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->session()->get('authToken');

        // Check if token exists in the session
        if (!$token) {
            // Handle case where token is missing
            return redirect('/login')->with('error', 'Unauthorized');
        }
        return view('Dashboard.index');
    }
}
