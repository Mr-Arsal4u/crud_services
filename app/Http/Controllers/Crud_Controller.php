<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\UserServices;

class Crud_Controller extends Controller
{
  
    protected $userService;

    public function  __construct(UserServices $userService ) {
        $this->userService = $userService;
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->userService->createUser($request);

        return redirect()->route('welcome');
    }

    public function edit($id)
    {
      $user= $this->userService->EditUser($id);

        return view('edit', compact('user'));
    }
    public function update(Request $request, User $id)
    {
        $this->userService->updateUser($request,$id);

        return redirect()->route('welcome');
    }

    public function destroy($id)
    {
        $this->userService->deleteUser($id);

        return redirect()->route('welcome');
    }
}
