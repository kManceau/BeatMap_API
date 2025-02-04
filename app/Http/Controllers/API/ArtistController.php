<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Services\ApiService;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    private $apiService;
    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }
    public function index()
    {
        return $this->apiService->getAll('artists');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->apiService->create('artist', $request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Artist $artist)
    {
        return $this->apiService->getOne('artist', $artist);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artist $artist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        return $this->apiService->delete('artist', $artist);
    }
}
