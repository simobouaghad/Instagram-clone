<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

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
        $u = User::FindOrFail($user);
        $this->authorize('update', $u->profile);

        return view('profiles.edit', [
            'user' => $u,
        ]);
    }

    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user->profile);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if(request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();
        }

        $profile = $user->profile;
        $profile->title = strip_tags($request->input('title'));
        $profile->description = strip_tags($request->input('description'));
        $profile->url = strip_tags($request->input('url'));
        $profile->image = $imagePath ?? null;
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
