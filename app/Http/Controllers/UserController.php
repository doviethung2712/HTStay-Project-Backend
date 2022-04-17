<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function bookingDetail()
    {
        $bkd = $this->userRepository->bookingDetail(Auth::user()->id);
        return response()->json($bkd, 201);
    }

    public function booking(Request $request)
    {
        $this->userRepository->bookingRoom($request);
        return response()->json([
            'message' => 'booking room success',
            'status' => 'success',
        ], 201);
    }

    public function cancelBooking($id)
    {
        $res = $this->userRepository->cancelBooking($id);
        if ($res) {
            return response()->json([
                'message' => 'cancel booking room success',
                'status' => 'success'
            ], 201);

        } else {
            return response()->json([
                'message' => 'cancel booking room fail',
                'status' => 'error'
            ], 401);
        }
    }
}
