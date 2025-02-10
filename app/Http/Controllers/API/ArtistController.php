<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Event;
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
        $limit = $_GET['limit'] ?? null;
        $order_by = $_GET['order_by'] ?? null;
        $direction = $_GET['direction'] ?? null;
        return $this->apiService->getAll('artists', $limit, $order_by, $direction);
    }

    public function store(Request $request)
    {
        return $this->apiService->create('artist', $request);
    }

    public function show(Artist $artist)
    {
        return $this->apiService->getOne('artist', $artist);
    }

    public function update(Request $request, Artist $artist)
    {
        return $this->apiService->update('artist', $request, $artist);
    }

    public function destroy(Artist $artist)
    {
        return $this->apiService->delete('artist', $artist);
    }

    public function getPopularArtists()
    {
        $artists = Artist::all();
        $artists->load(['events', 'style']);
        foreach ($artists as $artist) {
            $artist->events_count = $artist->events->count();
        }
        $artists = $artists->sortByDesc('events_count');
        $limit = $_GET['limit'] ?? null;
        if($limit){
            $artists = $artists->take($_GET['limit']);
        }
        return response()->json($artists);
    }
}
