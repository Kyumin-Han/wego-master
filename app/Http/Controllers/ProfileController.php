<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    protected function uploadPostImage($request) {
        $name = $request->file('imageFile')->getClientOriginalName();
        $extension = $request->file('imageFile')->extension();
        $nameWithoutExtension = Str::of($name)->basename('.'.$extension);
        $fileName = $nameWithoutExtension . '_' . time() . '.' . $extension;
        $request->file('imageFile')->storeAs('public/images', $fileName);
        return $fileName;
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        
        if($request->file('imageFile')) {
            if($user->image != null) {
                $imagePath = 'public/images/'.$user->image;
                Storage::delete($imagePath);
            }
            $user->image=$this->uploadPostImage($request);
        }

        $introduce = $request->introduce;
        $address = $request->address;
        $tech = $request->tech;

        $user->introduce = $introduce;
        $user->address = $address;
        $user->tech = $tech;

        $user->save();

        return redirect()->route('mypage', ['user'=>$user]);
    }

    public function mypage() {
        return view('front.mypage');
    }

}
