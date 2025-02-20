<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\LoginRequest;
use App\Http\Requests\Users\RegistrationRequest;
use App\Models\User;
use App\Services\ImageService;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register(Request $request, ImageService $imageService): \Illuminate\Http\JsonResponse
    {
        $data = $request->validate((new RegistrationRequest)->rules());
        if (array_key_exists('photo', $data)) {
            $photoName = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $data['name']));
            $imageService->uploadImages($data['photo'], $photoName, 'user');
            $data['photo'] = $photoName;
        }
        $user = $this->user::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'user',
            'photo' => $data['photo'] ?? null,
        ]);
        $token = auth()->login($user);
        if ($token) {
            return $this->successMessage('Registered successfully', $token, $user);
        } else {
            return $this->errorMessage('Error while registering');
        }
    }

    public function login(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate((new LoginRequest)->rules());
        $token = auth()->attempt([
            'email' => $request['email'],
            'password' => $request['password'],
        ]);

        if ($token) {
            return $this->successMessage('Logged in successfully', $token, auth()->user());
        } else {
            return $this->errorMessage('Error while logging in');
        }
    }

    public function logout(): \Illuminate\Http\JsonResponse
    {
        $token = JWTAuth::getToken();
        $invalidate = JWTAuth::invalidate($token);
        if ($invalidate) {
            return $this->successMessage('Logged out successfully');
        } else {
            return $this->errorMessage('Error while logging out');
        }
    }

    public function currentUser(): \Illuminate\Http\JsonResponse
    {
            return response()->json(['user' => auth()->user(), 'code' => 200]);
    }

    public function successMessage($message, $token = null, $user = null): \Illuminate\Http\JsonResponse
    {
        $data = [
            'meta' => [
                'code' => 200,
                'status' => 'success',
                'message' => $message,
            ],
        ];
        if ($token) {
            $data['data'] = [
                'user' => $user,
                'token' => [
                    'access_token' => $token,
                    'token_type' => 'bearer',
                    'expires_in' => auth()->factory()->getTTL() * 3600,
                ],
            ];
        }
        return response()->json($data);
    }


    public function errorMessage($message): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'meta' => [
                'code' => 422,
                'status' => 'error',
                'message' => $message,
            ],
        ]);
    }
}
