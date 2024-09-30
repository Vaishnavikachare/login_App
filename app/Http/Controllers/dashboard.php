<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function list()
    {
       // \Log::info("hi");
        $User = User::all();
        return view('dashboard', compact('User'));
    }

    public function userlist($parent_user_id)
    {
        $users = User::where('parent_user_id', $parent_user_id)->get();
    
        return view('dashboard', compact('users'));
    }
}
