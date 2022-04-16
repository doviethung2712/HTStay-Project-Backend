<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserRepository extends BaseRepository
{
  public function getTable()
  {
      return User::class;
  }

  public function createUser($data)
  {
    $this->models::create($data);
  }

  public function getModel()
  {
    return User::class;
  }

  public function register($request){
    User::create([
        'name'=> $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role_id' => $request->role_id
    ]);
  }
}




