<?php
namespace App\Repositories;

use App\Models\Room;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class RoomRepository extends BaseRepository {

    public function getTable(){
        return 'rooms';
    }
    public function getModel(){
        return Room::class;
    }
    public function createRoom($data){
        $room = new Room();
        $room->name = $data['name'];
        $room->address = $data['address'];
        $room->description = $data['description'];
        $room->shortdescription = $data['shortdescription'];
        $room->city_id = $data['city_id'];
        $room->category_id = $data['category_id'];
        $room->user_id = $data['user_id'];
        $room->save();
    }
    public function updateRoom($data,$id){

        $room =  Room::findOrFail($id);
        $room->name = $data['name'];
        $room->address = $data['address'];
        $room->description = $data['description'];
        $room->shortdescription = $data['shortdescription'];
        $room->city_id = $data['city_id'];
        $room->category_id = $data['category_id'];
        $room->user_id = $data['user_id'];
        $room->save();

        // DB::table("rooms")->where('id',$id)->update($data);
    }

}



