<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View;
Use Illuminate\Support\Facades\DB;



class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(3);
        return view('user.index', compact('users'));

    }

    public function show($id)
{
        $user = User::findorFail($id);
        return view('user.show', ['user' => $user]);
}
 
}
