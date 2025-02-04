<?php

namespace App\Services;

use App\Models\Artist;
use App\Models\Event;
use App\Models\Place;
use App\Models\Style;
use App\Models\User;
use App\Http\Requests\Artists\CreateArtistFormRequest;
use App\Http\Requests\Artists\UpdateArtistFormRequest;
use App\Http\Requests\Events\CreateEventFormRequest;
use App\Http\Requests\Places\CreatePlaceFormRequest;
use App\Http\Requests\Styles\CreateStyleFormRequest;
use App\Http\Requests\Events\UpdateEventFormRequest;
use App\Http\Requests\Places\UpdatePlaceFormRequest;
use App\Http\Requests\Styles\UpdateStyleFormRequest;

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

    public function delete($model, $data)
    {
        $data->delete();
        return response()->json(['status' => strtoupper($model[0]) . substr($model, 1) . ' deleted successfully']);
    }

    public function create($model, $request)
    {
        switch ($model) {
            case 'artist' :
                $validatedData = $request->validate((new CreateArtistFormRequest())->rules());
                $validatedData = new Artist($validatedData);
                break;
            case 'event' :
                $validatedData = $request->validate((new CreateEventFormRequest())->rules());
                $validatedData = new Event($validatedData);
                break;
            case 'place' :
                $validatedData = $request->validate((new CreatePlaceFormRequest())->rules());
                $validatedData = new Place($validatedData);
                break;
            case 'style' :
                $validatedData = $request->validate((new CreateStyleFormRequest())->rules());
                $validatedData = new Style($validatedData);
                break;
        }
        $validatedData->save();
        return response()->json([
            'status' => strtoupper($model[0]) . substr($model, 1) . ' created successfully',
            'data' => $validatedData,
        ]);
    }

    public function update($model, $request, $data)
    {
        switch ($model) {
            case 'artist' :
                $validatedData = $request->validate((new UpdateArtistFormRequest())->rules());
                break;
            case 'event' :
                $validatedData = $request->validate((new UpdateEventFormRequest())->rules());
                break;
            case 'place' :
                $validatedData = $request->validate((new UpdatePlaceFormRequest())->rules());
                break;
            case 'style' :
                $validatedData = $request->validate((new UpdateStyleFormRequest())->rules());
                break;
        }
        $data->update($validatedData);
        return response()->json([
            'status' => strtoupper($model[0]) . substr($model, 1) . ' updated successfully',
            'data' => $validatedData,
        ]);
    }
}
