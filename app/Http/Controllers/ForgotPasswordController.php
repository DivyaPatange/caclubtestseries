<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('auth.forgot-password');
    }

    public function search(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(!empty($user)) {
            return 'Email Exists!';
        } else {
            return 'Email does not exists';
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|confirmed',
        ]);
        $user = User::where('email', $request->email)->first();
        if(!empty($user)) {
            User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);
            return redirect()->back()->with('success', 'Password updated successfully!');
        } else {
            return redirect()->back()->with('danger', 'Password not updated. Please check email!');
        }
    }
}
