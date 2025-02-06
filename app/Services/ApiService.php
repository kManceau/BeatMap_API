<?php

namespace App\Services;

use App\Models\Artist;
use App\Models\Event;
use App\Models\Place;
use App\Models\Style;
use App\Models\User;

class ApiService
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function getAll($model)
    {
        $models = [
            'artists' => Artist::with('style'),
            'events' => Event::with(['place', 'artists', 'user']),
            'places' => Place::with(['events', 'user']),
            'styles' => Style::with(['artists']),
            'users' => User::query()
        ];
        $data = $models[$model]->get();
        return response()->json($data);
    }

    public function getOne($model, $data)
    {
        $models = [
            'artist' => ['style'],
            'event' => ['place', 'artists', 'user'],
            'place' => ['events', 'user'],
            'style' => ['artists'],
        ];
        array_key_exists($model, $models) ? $data->load($models[$model]) : $data;
        return response()->json($data);
    }

    public function create($model, $request)
    {
        $formRequest = ModelFactory::createFormRequest($model);
        $validatedData = $request->validate($formRequest->rules());
        if (array_key_exists('photo', $validatedData)) {
            $photoName = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $validatedData['name']));
            $this->imageService->uploadImages($validatedData['photo'], $photoName, $model);
            $validatedData['photo'] = $photoName;
        }
        $modelInstance = ModelFactory::create($model, $validatedData);
        $modelInstance->save();
        return response()->json([
            'status' => strtoupper($model[0]) . substr($model, 1) . ' created successfully',
            'data' => $validatedData,
        ]);
    }

    public function update($model, $request, $data)
    {
        $formRequest = ModelFactory::updateFormRequest($model);
        $validatedData = $request->validate($formRequest->rules());
        if (array_key_exists('photo', $validatedData)) {
            array_key_exists('name', $validatedData) ?
                $photoName = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $validatedData['name'])) :
                $photoName = $data->photo;
            $this->imageService->deleteImages($data->photo, $model);
            $this->imageService->uploadImages($validatedData['photo'], $photoName, $model);
            $validatedData['photo'] = $photoName;
        }
        $data->update($validatedData);
        return response()->json([
            'status' => strtoupper($model[0]) . substr($model, 1) . ' updated successfully',
            'data' => $validatedData,
        ]);
    }

    public function delete($model, $data)
    {
        $this->imageService->deleteImages($data->photo, $model);
        $data->delete();
        return response()->json(['status' => strtoupper($model[0]) . substr($model, 1) . ' deleted successfully']);
    }
}
