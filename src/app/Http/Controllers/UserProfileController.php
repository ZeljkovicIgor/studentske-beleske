<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ChangeUsernameRequest;
use App\Http\Requests\DeleteProfileRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function getUserProfile()
    {
        return view('user-profile', ['user' => Auth::user()]);
    }

    public function changeUsername(ChangeUsernameRequest $request, User $user)
    {
        $user->username = $request->validated('username');
        $user->save();

        return redirect()->back();
    }

    public function changePassword(ChangePasswordRequest $request, User $user)
    {
        $user->password = $request->validated('new_password');
        $user->save();

        return redirect()->back();
    }

    public function deleteProfile(DeleteProfileRequest $request)
    {
        $user_id = Auth::id();

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        User::destroy($user_id);

        return redirect('/');
    }
}
