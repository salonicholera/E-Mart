<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;
use Auth;

class AccountController extends Controller
{

    /**
     * Show Admin Profile
     */
    public function profile()
    {
        return view('admin.account.profile');
    }

    /**
     * Update Admin Profile
     */
    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        Auth::user()->update($request->all());
        return back();
       
    }

    /**
     * Update Password
     */
    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required',
            'confirm_password' => 'same:new_password',
        ]);

		Auth::user()->update(['password'=> Hash::make($request->new_password)]);
        return back();
    }
}
