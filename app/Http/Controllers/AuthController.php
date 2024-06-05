<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.index');
    }
    public function login(Request $request)
    {
        // Validate request data (email and password)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        try {
            // Make the request to the API to log in
            $response = Http::post(env('API_BASE_URL') . 'login', [
                'email' => $request->email,
                'password' => $request->password,
            ]);

            // Check if login was successful
            if ($response->successful()) {
                // Extract token and user data from the response
                $data = $response->json();

                // Check if $data is not null and contains the expected keys
                if (isset($data['access_token']) && isset($data['user'])) {
                    $token = $data['access_token'];

                    // Store the token in the session
                    $request->session()->put('authToken', $token);

                    // Return JSON response with token and redirect URL
                    return response()->json([
                        'token' => $token,
                        'redirectUrl' => '/' // Change this to your intended redirect route
                    ]);
                }
            }

            // If login failed or data structure is invalid, return JSON response with error message
            return response()->json(['error' => 'Login failed. Please check your credentials and try again.'], 422);
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function showRegisterForm()
    {
        return view('Register.index');
    }
    public function register(Request $request)
    {
        // Validate request data (email and password)
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        try {
            // Make the request to the API to register the user
            $response = Http::post(env('API_BASE_URL') . 'register', [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => $request->password,
                'password_confirmation' => $request->password_confirmation,
            ]);
    
            // Check if registration was successful
            if ($response->successful()) {
                return response()->json(['message' => 'Registration successful'], 200);
            }
    
            // If registration failed, return JSON response with error message from the API
            $errorMessage = $response->json()['message'] ?? 'Registration failed. Please check your data and try again.';
            return response()->json(['error' => $errorMessage], 422);
        } catch (\Exception $e) {
            // Log the error or handle it as needed
            return response()->json(['error' => 'Server error: ' . $e->getMessage()], 500);
        }
    }
    
}