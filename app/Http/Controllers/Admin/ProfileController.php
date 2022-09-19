<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }

    public function index()
    {
        $profile = User::find(Auth::user()->id)->first();
        return view('backend.profile.index', compact('profile'));
    }

    public function socials()
    {
        $socialProfile = User::find(Auth::user()->id);
        return view('backend.profile.socials',compact('socialProfile'));
    }

    public function edit($id)
    {
        $userProfile = User::findOrFail(Auth::user()->id);
        return view('backend.profile.edit', compact('userProfile'));
    }

    public function security()
    {  $user = User::findOrFail(Auth::id());
        return view('backend.profile.security',compact('user'));
    }

    public function updatePassword($id)
    {
        $userId = $user = User::findOrFail(Auth::id());
        return view('backend.profile.password',compact('userId'));
    }

    public function storeUpdatedPassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
  
        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) 
        {
            toastr()->error('That was not your current password! Try Again!');
            return back();
        }

        $user->password = Hash::make($request->password);         
        
        if ($user->save()) 
        {
            toastr()->success('Password Updated Successfully');
            Auth::logout();
            toastr()->success('Please login again');
            return redirect()->route('auth.login');
        } 
    }

    public function create()
    {
        return view('backend.profile.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'about_author' => 'nullable|string|min:3',
            'social_facebook' => 'nullable|string|max:255',
            'social_twitter' => 'nullable|string|max:255',
            'social_instagram' => 'nullable|string|max:255',
        ]);

        if ($validator->fails())
        {
            toastr()->error($validator->errors()->first());
            return back();
        }

        $userData = User::findOrFail(Auth::id());
        $userData->about_author = $request->about_author;
        $userData->social_facebook = $request->social_facebook;
        $userData->social_twitter = $request->social_twitter;
        $userData->social_instagram = $request->social_instagram;

        if ($userData->save()) {
            toastr()->success('User Data Updated Successfully');
            return redirect()->route('admin.profile');
        }
    }
    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),
        [
            'name' => 'required|string|min:3',
            'social_facebook' => 'nullable|string|min:3',
            'social_twitter' => 'nullable|string|min:3',
            'social_instagram' => 'nullable|string|min:3',
            'avatar' => 'nullable|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if ($validator->fails())
        {
            toastr()->error($validator->errors()->first());
            return back();
        }
        
        $user = Auth::id();
        $userData = User::findOrFail($user);
        $userData->slug = null;

        $updatedData = $request->all();  

        if ($avatar = $request->file('avatar')) {
            $avatarName = time().'.'.$request->avatar->extension();
            $avatar->storeAs('avatar', $avatarName);
            $updatedData['avatar'] = $avatarName;
        }else{
            unset($updatedData['avatar']);
        }            

        if($userData->update($updatedData))
        {
            toastr()->success('Data Updated Successfully.');
            return redirect()->route('admin.profile');
        }
    }
}
