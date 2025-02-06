<?php

namespace App\Services;

use App\Http\Requests\Artists\CreateArtistFormRequest;
use App\Http\Requests\Artists\UpdateArtistFormRequest;
use App\Http\Requests\Events\CreateEventFormRequest;
use App\Http\Requests\Events\UpdateEventFormRequest;
use App\Http\Requests\Places\CreatePlaceFormRequest;
use App\Http\Requests\Places\UpdatePlaceFormRequest;
use App\Http\Requests\Styles\CreateStyleFormRequest;
use App\Http\Requests\Styles\UpdateStyleFormRequest;
use App\Models\Artist;
use App\Models\Event;
use App\Models\Place;
use App\Models\Style;

class ModelFactory
{
    public static function create($model, $validatedData)
    {
        $models = [
            'artist' => new Artist($validatedData),
            'event' => new Event($validatedData),
            'place' => new Place($validatedData),
            'style' => new Style($validatedData),
        ];
        return $models[$model];
    }

    public static function createFormRequest($model)
    {
        $models = [
            'artist' => new CreateArtistFormRequest(),
            'event' => new CreateEventFormRequest(),
            'place' => new CreatePlaceFormRequest(),
            'style' => new CreateStyleFormRequest(),
        ];
        return $models[$model];
    }

    public static function updateFormRequest($model)
    {
        $models = [
            'artist' => new UpdateArtistFormRequest(),
            'event' => new UpdateEventFormRequest(),
            'place' => new UpdatePlaceFormRequest(),
            'style' => new UpdateStyleFormRequest(),
        ];
        return $models[$model];
    }
}

