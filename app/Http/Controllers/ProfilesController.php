<?php

namespace App\Http\Controllers;

use App\Models\Profile;
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

    public function update(Request $request, User $user)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        $profile = $user->profile;

        $profile->title = strip_tags($request->input('title'));
        $profile->description = strip_tags($request->input('description'));
        $profile->url = strip_tags($request->input('url'));

        $profile->save();
        return redirect("/profile/{$user->id}");


        // $data = request()->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'url' => 'url',
        // ]);

        // $user->profile()->update($data);
        // return redirect("/profile/{$user->id}");
    }

}
