<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;
use App\Models\User;
use Laravel\Fortify\Fortify;

class LoginResponse implements ContractsLoginResponse
{
    public function toResponse($request)
    {
        // here i am checking if the currently logout in users has a role_id of 2 which make him a regular user and then redirect to the users dashboard else the admin dashboard
        $user = User::where('email', $request->email)->first();
        return $request->isJson()

            ?  response()->json(["code" => 200, "status" => 'success', 'message' => 'loginsuccess', "id" => $user->id, "name" => $user->name, "photo" => $user->profile_photo_path])
            : redirect()->intended(Fortify::redirects('login'));
    }
}
