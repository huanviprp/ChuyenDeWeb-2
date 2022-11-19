<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DangkyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lists = User::all();
        return response()->json($lists);
        dd($request->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->userName;
        $user->email = $request->email;
        $user->password = hash('md5', $request->Password);
        $user->save();
    }
    public function loginUser(Request $request){
        $email = $request->email; //lấy email của phương thức post vuejs gửi qua
        $pass = $request->pass;  //lấy pass của phương thức post vuejs gửi qua
  
        //kiểm tra email và pass trong CSDL
        $data = User::where('email','=',$email)->where('password','=',hash('md5',$pass))->get();
                  
         if(count($data)>0){
             if($data[0]->email==$email && $data[0]->pass=hash("md5",$pass)){
                 //return response()->json($data[0]->email);
  
                 //nếu đúng trả về 1
                 return response()->json(array("success"=>1));
             }
         }else{
  
             //nếu sai trả về 0
             return response()->json(array("success"=>0));
         }
          
     }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
