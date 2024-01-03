<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

class UserServices
{
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|confirmed',

        ]);
        User::create($request->all());
    }
    public function EditUser($id)
    {
        return User::find($id);
       
    }

    public function updateUser(Request $request, User $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',

        ]);

        $id->update($request->all());
    }
}
