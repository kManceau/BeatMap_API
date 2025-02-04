<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Services\ApiService;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $apiService;
    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }
    public function index()
    {
        return $this->apiService->getAll('events');
    }

    public function store(Request $request)
    {
        return $this->apiService->create('event', $request);
    }

    public function show(Event $event)
    {
        return $this->apiService->getOne('event', $event);
    }

    public function update(Request $request, Event $event)
    {
        //
    }

    public function destroy(Event $event)
    {
        return $this->apiService->delete('event', $event);
    }
}
