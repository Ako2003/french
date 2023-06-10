<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function userLogin(Request $request)
    {
        $data = $request->input();
        $request->session()->put('user',$data['user']);
        $user = session('user');
        return redirect('profile')->with(
            [
                'user'=>$user
            ]
            );
    }
}
