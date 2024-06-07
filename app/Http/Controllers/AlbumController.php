<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AlbumController extends Controller
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
        ])->get(env('API_BASE_URL') . 'albums');
        $responseData = $response->json();

        return view('Album.index', compact('responseData'));
    }
    public function showPhotos(Request $request, $id)
{
    // Get the authentication token from the session
    $token = $request->session()->get('authToken');

    // Check if token exists in the session
    if (!$token) {
        // Redirect to the login page with an error message
        return redirect('/login')->with('error', 'Unauthorized');
    }

    // Make a GET request to fetch the user's information based on the ID
    $albumsResponse = Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
        'Accept' => 'application/json',
    ])->get(env('API_BASE_URL') . 'albums/' . $id);

    // Make a GET request to fetch the albums associated with the user
    $photoResponse = Http::withHeaders([
        'Authorization' => 'Bearer ' . $token,
        'Accept' => 'application/json',
    ])->get(env('API_BASE_URL') . 'album/' . $id . '/photos');

    // Check if both requests were successful
    if ($albumsResponse->successful() && $photoResponse->successful()) {
        // Parse the response data and extract the user information and albums
        $albums = $albumsResponse->json();
        $photos = $photoResponse->json();
        
        // Get the number of albums
        $numberOfAlbums = count($albums);

        // Pass the user data, albums, and number of albums to the view
        return view('Album.photos', compact('photos', 'albums', 'numberOfAlbums'));
    } else {
        // If any of the requests failed, return an error view or handle the error as needed
        $errorMessage = 'Failed to fetch albums';
    }
}
}
