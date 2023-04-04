<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function edit(Request $request)
    {
        $user = Auth::user();
        return view('auth.editprofile', compact('user'));
    }

    public function update(Request $request, User $id)
    {
        $request->validate([
            'name'       => 'required|string|min:2|max:100',
            'photo'       => ['required', File::types(['jpg', 'jpeg', 'png'])],
        ]);


        $id = Auth::user()->id;

        $user = User::find($id);
        $user->name = $request->name;
        if ($request->file('photo')) {
            if ($user->photo && Storage::exists($user->photo)) {
                Storage::delete($user->photo);
            }
            $user->photo = Storage::putFile('photos', $request->file('photo'));
        }
        $user->save();
        return back()->with('status', 'Berhasil Mengupdate Profil!');
    }
}
