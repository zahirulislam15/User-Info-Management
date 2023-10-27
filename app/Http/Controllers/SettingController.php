<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function UserColor(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::where('id', $id)->first();
        $data->color = $request->color;
        $data->save();
        return back();
    }
}
