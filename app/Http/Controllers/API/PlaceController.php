<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Services\ApiService;
use Illuminate\Http\Request;

class PlaceController extends Controller
{
    private $apiService;
    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }
    public function index()
    {
        return $this->apiService->getAll('places');
    }

    public function store(Request $request)
    {
        return $this->apiService->create('place', $request);
    }

    public function show(Place $place)
    {
        return $this->apiService->getOne('place', $place);
    }

    public function update(Request $request, Place $place)
    {
        return $this->apiService->update('place', $request, $place);
    }

    public function destroy(Place $place)
    {
        return $this->apiService->delete('place', $place);
    }
}
