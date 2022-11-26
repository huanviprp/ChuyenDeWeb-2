<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $request)
    {
        //Lấy danh sách user trong database đổ về vue để xử lý ra template
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attemp($credentials)){
            $success = true;
            $message = "Bạn đăng nhập thành công";
        }else{
            $success = false;
            $message = "Đăng nhập không thành công";
        }

        $response = [
            'success' => $success,
            'message' => $message
        ];

        return response()->json($response);
    }
    public function register(Request $request)
    {
        try {
            $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash('md5', $reques->pass);
        $user->save();
        }catch(\Illuminate\Database\QueryException $ex){
            $success = false;
            $message = $ex->getMessage();
        }

        $response = [
            'success' => $success,
            'message' => $message
        ];
        return response()->json($response);
    }
    public function logout(){
        try {
            Session::flush();
            $success = true;
            $message = "Bạn đăng xuất thành công";
        }catch(\Illuminate\Database\QueryException $ex){
            $success = false;
            $message = $ex->getMessage();
        }
        $response = [
            'success' => $success,
            'message' => $message
        ];
        return response()->json($response);
    }
}
