<?php

namespace App\Http\Controllers;

use App\Models\User;


class PostController extends Controller
{


    public function index(User $user) {
        return view('dashboard', [
            "user" => $user,
        ]);
    }
}
