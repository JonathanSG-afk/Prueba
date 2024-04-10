<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $userAddres = User::with('address')->get();
        $userAge = $userAddres->map(function ($user) {
            $birthdate = $user->date_of_birth;

            $age = $birthdate->diffInYears(now());
            return [
                'user' => $user,
                'age' => $age
            ];
        });

        return response()->json($userAge);
    }
}
