<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ResetPasswordController extends Controller
{
    public function showResetForm()
    {
        return view('auth.password-reset');
    }

    public function reset(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'token' => 'required',
            'password' => 'required|min:8|confirmed', // 'confirmed' checks for password_confirmation field
        ]);

        // Verify the token
        $resetRecord = DB::table('password_reset_tokens')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$resetRecord || now()->diffInMinutes($resetRecord->created_at) > 60) {
            return back()->withErrors(['token' => 'Invalid or expired reset token.']);
        }

        // Update user's password
        $user = \App\Models\User::where('email', $request->email)->first();
        $user->password = bcrypt($request->password);
        $user->save();

        // Remove the token after successful reset
        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        // Redirect with success message
        return redirect()->route('login')->with('status', 'Your password has been reset successfully!');
    }

}
