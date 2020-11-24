<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;

use Image;
use File;



class UserController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function index(Request $request)
    {
      $users = User::orderBy('id', 'desc')->get();
      $courses = Course::orderBy('id', 'desc')->get();
       
        return view('profile', compact('users','courses'));
    }

    public function edit()
    {
        return view('edit');

       
    }

    public function update(Request $request, $id)
    {
          $this->validate($request, [
          'name'  => 'required',
          'phone'  => 'required',
          'email'  => 'required',
          'avatar'  => 'nullable|avatar',
          
        ],
        [
          'name.required'  => 'Please provide name ',
          'phone.required'  => 'Please provide phone number',
          'avatar.avatar'  => 'Please provide a valid image',
         
        ]);

        $user_id = Auth::user()->id;
        $user = Auth::findOrfail($user_id);

        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        // $user->button_text = $request->button_text;
        // $user->button_link = $request->button_link;
        //$user->priority = $request->priority;

        if ($request->hasfile ('avatar')) {
            // Delete the old user

            if (File::exists('images/'.$user->avatar)) {
                File::delete('images/'.$user->avatar);
              }

            $file = $request->file('avatar');

            $image = $request->file('avatar');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = 'images/' .$img;
            Image::make($image)->save($location);
            $user->avatar = $img;
        }
        $user->save();

        session()->flash('success', 'avatar has updated successfully !!');
        return redirect()->route('profile');

    }


}
