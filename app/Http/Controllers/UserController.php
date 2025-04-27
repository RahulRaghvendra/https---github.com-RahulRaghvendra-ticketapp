<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
   
    public function store(Request $request){
   
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
     
     
            $tblObj = new User();
            $msg= "User Registered successfully";
        
        $tblObj->name = $request->name;
        $tblObj->email = $request->email;
        $tblObj->password= Hash::make($request->password);
        $tblObj->save();
        return redirect()->back()->with('success', $msg);

    }
}
