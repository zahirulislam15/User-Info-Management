<?php

namespace App\Http\Controllers;


use App\Models\User;
// use Illuminate\Console\View\Components\Alert;
// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function update(Request $request, $id)
    {
        // return $request;
        
        $request->validate([
            'name' => 'required',
            'dob'   => 'required',
            'permanent_address' => 'required',
            'phone' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',

        ]);

        // Generate Unique id
        $year = date("y");
        $month = date("m");
        $date = date("d");
        
        $rowCount = DB::table('users')->count();
        $serial = str_pad(++$rowCount, 4, '0', STR_PAD_LEFT);
        $unique_no = $year.$month.$date.$serial.$id;

        $user = User::find($id);
        $user->name = $request->name; 
        $user->permanent_address = $request->permanent_address; 
        $request->has('same') ? $user->present_address = $request->permanent_address : $user->present_address = $request->present_address;        
        $user->phone = $request->phone; 
        $user->nid = $request->nid; 
        if($user->unique_no == null){
            $user->unique_no = $unique_no; 
        }        
        $user->dob = $request->dob; 
        $user->gender = $request->gender; 
        $user->blood_group = $request->blood_group; 
        $user->father_name = $request->father_name; 
        $user->f_nationality = $request->f_nationality; 
        $user->m_nationality = $request->m_nationality; 
        $user->mother_name = $request->mother_name; 
       
        // return $request;
        // return $user;
        $user->save();

        $showAlert = true;
        return view('frontend/layout/user/edit', compact('showAlert','user'));
    }


    public function delete($id){
        $data = User::find($id);
        $data->delete();
        $users = User::where('user_type', '2')->get();
        return view('frontend/layout/user/list', compact('users'));
    }


    public function downloadInfo($id){
        $data = User::find($id);
        return view('frontend/layout/user/download', compact('data'));
    }
    
}
