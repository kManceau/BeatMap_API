<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\ApiService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $apiService;
    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }
    public function index()
    {
        return $this->apiService->getAll('users');
    }

    public function show(User $user)
    {
        return $this->apiService->getOne('user', $user);
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        return $this->apiService->delete('user', $user);
    }
}
