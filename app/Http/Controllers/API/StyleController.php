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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Style $style)
    {
        return $this->apiService->getOne('style', $style);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Style $style)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Style $style)
    {
        //
    }
}
