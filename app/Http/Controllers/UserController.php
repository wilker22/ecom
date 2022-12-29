<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function UserDashboard()
    {
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view ('index', compact('userData') );
    }

    
}
