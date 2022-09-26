<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','isAdmin']);
    }

    public function index()
    {
        $users = User::orderBy('created_at', 'DESC')->get();
        return view('backend.users.index',compact('users'));
    }

    public function create()
    {
        return view('backend.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed'
        ]);

        $userData = $request->all();

        $userData = User::create($userData);
        $userData->password = Hash::make($request->password);
        $userData->role_id = 3;
        
        if($userData->save())
        {
            toastr()->success('New User created Successfully');
            return redirect()->route('admin.users');
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        toastr()->success('You have deleted the user successfully');
        return redirect()->route('admin.users');
    }
}
