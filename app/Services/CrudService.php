<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Termwind\Components\Ul;

class CrudService
{
    public function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        return $user;
    }

    public function getUsers()
    {
        $users = User::all();
        return $users;
    }

    public function getUser(User $user)
    {
        return $user;
    }

    public function deleteUser(User $user)
    {
        $user->delete();
        return $user;

    }

    public function updateUser(User $user)
    {
        
    }

}