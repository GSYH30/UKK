<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        $user = DB::table("users")->get();
        return view("data-user", compact('user'));
    }
    public function create() {
        return view('register');
    }

    public function store(Request $request) {
        User::create($request->only('name', 'email', 'number', 'password'));
        return view('notif-register');
    }
}
