<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Validator;


class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json(auth('api')->user())->header('Authorization', $token);
    }
    public function logout()
    {
        auth('api')->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
    public function user()
    {
        return response()->json(auth('api')->user());
        $users = User::all()->sortByDesc('id')->toArray();
        return array_reverse($users);
    }
    public function add(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash('md5', $request->password);
        $user->save();
        return response()->json('The user successfully added');
    }
    // edit post
    public function edit($id)
    {
        $user = User::find($id);

        return response()->json($user);
    }
    // update post
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $user->update($request->only('name', 'email', 'password'));
        return response()->json('The user successfully updated');
    }
    // delete post
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json('The user successfully deleted');
    }
}
