<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
   

    public function index(Request $req)
    {
        $user = Auth::user();
        $users = User::all();
        return view('user', compact('user', 'users'));
    }


}
