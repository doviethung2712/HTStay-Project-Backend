<?php

namespace App\Http\Controllers;

use App\Repositories\RoomRepository;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public $roomRepository;
    public function __construct(RoomRepository $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    public function index()
    {
        $rooms = $this->roomRepository->getAll();
        if (!$rooms) {
            $res = [
                'message' => 'Room not found',
                'status' => 'error',

            ];
        } else {
            $res = [
                'status' => 'success',
                'room' => $rooms,
            ];
        }
        return response()->json($res);
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
        $this->roomRepository->createRoom($request);
        return response()->json([
            'message' => 'Room created successfully',
            'status' => true,
        ]);
    }


    public function show($id)
    {
        $room = $this->roomRepository->getById($id);
        if (!$room) {
            $res = [
                'message' => 'Room not found',
                'status' => 'error',

            ];
        } else {
            $res = [
                'status' => 'success',
                'room' => $room,
            ];
        }
        return response()->json($res);
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
        $room = $this->roomRepository->getById($id);
        if (!$room) {
            $res = [
                'message' => 'Room not found',
                'status' => 'error',

            ];
        } else {

            $this->roomRepository->updateRoom($request, $id);

            $res = [

                'status' => 'success',
                'message' => 'Room updated successfully'
            ];
        }
        return response()->json($res);
    }


    public function destroy($id)
    {
        $room = $this->roomRepository->getById($id);
        if (!$room) {
            $res = [
                'message' => 'Room not found',
                'status' => 'error',

            ];
        } else {

            $this->roomRepository->deleteById($id);
            $res = [
                'message' => 'Room deleted successfully',
                'status' => 'success',
            ];
        }
        return response()->json($res);
    }
}
