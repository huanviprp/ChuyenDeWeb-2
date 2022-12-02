<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }
    public function login($request Request)
    {
        //Lấy danh sách user trong database đổ về vue để xử lý ra template
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attemp($credentials)) {
            $success = true;
            $message = "Bạn đăng nhập thành công";
        } else {
            $success = false;
            $message = "Đăng nhập không thành công";
        }

        $response = [
            'success' => $success,
            'message' => $message
        ];

        return response()->json($response);
    }
}
