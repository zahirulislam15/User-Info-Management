<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //

    public function list(){
        $users = User::where('user_type', '2')->get();
        return view('frontend/layout/user/list', compact('users'));
    }

    public function edit(){
        // return Auth::user()->id;
        $user = User::where('id', Auth::user()->id)->first();
        return view('frontend/layout/user/edit', compact('user'));
    }
    
}
