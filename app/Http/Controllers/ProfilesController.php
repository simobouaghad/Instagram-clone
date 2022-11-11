<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        return view('profiles.index', [
            'user' => User::findOrFail($user),
        ]);
    }

    public function edit($user)
    {
        return view('profiles.edit', [
            'user' => User::FindOrFail($user),
        ]);
    }
}
