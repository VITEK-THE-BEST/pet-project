<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request){

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);


        $user = User::query()->create($validate);
        return response()->json($user);
    }
}
