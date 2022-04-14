<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Validator;

class AuthController extends Controller
{
    public $authService;
    public function __construct(UserRepository $userRepository)
    {
        $this->authService = $userRepository;
    }
    public function registerUser(Request $request)
    {
        $this->authService->register($request);
        return response()->json('susscess', 201);
    }
    public function getAll()
    {
        $user = User::all();
        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Tài khoản hoặc mật khẩu không đúng'], 401);
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user(),
            'message' => 'Đăng nhập thành công'
        ]);
    }
}
