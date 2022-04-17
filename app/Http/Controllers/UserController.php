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
        return response()->json($bkd,201);
    }
}
