<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Make sure you import the User model

class PasswordController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('auth.passwords.change');
    }

    public function changePassword(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Retrieve the authenticated user
        $user = Auth::user();

        // Check if the provided current password matches the user's password
        if (!Hash::check($request->current_password, $user->password)) {
            echo $request->current_password . "\n";
            echo $user->password . "\n";
            dd(Hash::check($request->current_password, $user->password));
            return redirect()->back()->with('error', 'Current password is incorrect');
        }

        // Update the user's password
        $user->password = Hash::make($request->new_password);

        // Save the updated user object
        $user->save();

        return redirect()->route('dash')->with('success', 'Password changed successfully');
    }
}
