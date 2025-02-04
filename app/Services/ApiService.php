<?php

namespace App\Services;

use App\Models\Artist;
use App\Models\Event;
use App\Models\Place;
use App\Models\Style;
use App\Models\User;

class ApiService
{
    public function getAll($model)
    {
        switch ($model) {
            case 'artists' :
                $data = Artist::with('style')->get();
                break;
            case 'events' :
                $data = Event::with(['place', 'artists', 'user'])->get();
                break;
            case 'places' :
                $data = Place::with(['events', 'user'])->get();
                break;
            case 'styles' :
                $data = Style::with(['artists'])->get();
                break;
            case 'users' :
                $data = User::all();
                break;
        }
        return response()->json($data);
    }

    public function getOne($model, $data)
    {
        switch ($model) {
            case 'artist' :
                $data->load('style');
                break;
            case 'event' :
                $data->load(['place', 'artists', 'user']);
                break;
            case 'place' :
                $data->load(['events', 'user']);
                break;
            case 'style' :
                $data->load(['artists']);
                break;
        }
        return response()->json($data);
    }
}
