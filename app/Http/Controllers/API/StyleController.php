<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Style;
use App\Services\ApiService;
use Illuminate\Http\Request;

class StyleController extends Controller
{
    private $apiService;
    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }
    public function index()
    {
        return $this->apiService->getAll('styles');
    }

    public function store(Request $request)
    {
        return $this->apiService->create('style', $request);
    }

    public function show(Style $style)
    {
        return $this->apiService->getOne('style', $style);
    }

    public function update(Request $request, Style $style)
    {
        //
    }

    public function destroy(Style $style)
    {
        return $this->apiService->delete('style', $style);
    }
}
