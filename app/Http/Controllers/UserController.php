<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $token = $request->session()->get('authToken');

        // Check if token exists in the session
        if (!$token) {
            // Handle case where token is missing
            return redirect('/login')->with('error', 'Unauthorized');
        }
        $token = $request->session()->get('authToken');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Accept' => 'application/json',
        ])->get(env('API_BASE_URL') . 'users');
        $responseData = $response->json();

        return view('Users.index', compact('responseData'));
    }
}
