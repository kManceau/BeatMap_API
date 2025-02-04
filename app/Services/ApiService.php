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
            case 'events' :
                $query = Event::all();
                break;
            case 'places' :
                $query = Place::all();
                break;
            case 'users' :
                $query = User::all();
                break;
            case 'styles' :
                $query = Style::all();
                break;
            case 'artists' :
                $query = Artist::all();
                break;
        }
        $data = $query->get();
        return response()->json($data);
    }
}
