<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function index(Request $request, $id)
{
    // Get the authentication token from the session
    $token = $request->session()->get('authToken');

    // Check if token exists in the session
    if (!$token) {
        // Redirect to the login page with an error message
        return redirect('/login')->with('error', 'Unauthorized');
    }

    // Make a GET request to fetch the user's information based on the ID
    $userResponse = Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
        'Accept' => 'application/json',
    ])->get(env('API_BASE_URL') . 'users/' . $id);

    // Make a GET request to fetch the albums associated with the user
    $albumsResponse = Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
        'Accept' => 'application/json',
    ])->get(env('API_BASE_URL') . 'users/' . $id . '/albums');

    // Check if both requests were successful
    if ($userResponse->successful() && $albumsResponse->successful()) {
        // Parse the response data and extract the user information and albums
        $user = $userResponse->json();
        $albums = $albumsResponse->json();
        
        // Get the number of albums
        $numberOfAlbums = count($albums);

        // Pass the user data, albums, and number of albums to the view
        return view('Profile.index', compact('user', 'albums', 'numberOfAlbums'));
    } else {
        // If any of the requests failed, return an error view or handle the error as needed
        $errorMessage = 'Failed to fetch albums';
    }
}
}
