<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Artist;
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
        $limit = $_GET['limit'] ?? null;
        $order_by = $_GET['order_by'] ?? null;
        $direction = $_GET['direction'] ?? null;
        return $this->apiService->getAll('events', $limit, $order_by, $direction);
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
        return $this->apiService->update('event', $request, $event);
    }

    public function destroy(Event $event)
    {
        return $this->apiService->delete('event', $event);
    }

    public function getPaginatedEvents(){
        return $this->apiService->getPaginated('events');
    }


    public function getEventArtistStyle(Event $event)
    {
        $eventData = $this->apiService->getOne('event', $event);
        $data = $eventData->getData(true);

        $artistsList = $data['artists'] ?? [];
        $artists = [];

        foreach ($artistsList as $artist) {
            $temp = Artist::where('id', $artist['id'])->first();
            $temp->load('style');
            $artists[] = $temp;
        }

        return response()->json([
            'event' => $event,
            'artists' => $artists,
        ]);
    }
}
