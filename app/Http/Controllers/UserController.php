<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function showLogin()
    {
        return view("welcome");
    }
    public function submitLogin(Request $request)
    {
        $userInput = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['emailaddress' => $userInput['email'], 'password' => $userInput['password']])) {
            $request->session()->regenerate();
        }
        return redirect()->route('loggedHome');
    }
    public function showRegistrationForm()
    {
        return view("showRegistrationForm");
    }
    public function submitRegistrationForm(Request $request)
    {
        $userInput = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'birthdate' => ['required', 'date'],
            'gender' => 'required',
            'emailaddress' => ['required', 'email', Rule::unique('users', 'emailaddress')],
            'password' => ['required', 'min:8']
        ]);

        try {
            $userInput['firstname'] = strip_tags($userInput['firstname']);
            $userInput['lastname'] = strip_tags($userInput['lastname']);
            $userInput['birthdate'] = strip_tags($userInput['birthdate']);
            $userInput['emailaddress'] = strip_tags($userInput['emailaddress']);
            $userInput['password'] = strip_tags($userInput['password']);

            $userInput['password'] = bcrypt($userInput['password']);

            $user = User::create($userInput);
            if ($user) {
                Auth::login($user);
                return redirect()->route("loggedHome");
            }
            return redirect()->route("publicSite");
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'Failed to register user. Please try again.']);
        }
    }
    public function showMainPage()
    {
        if (!Auth::check()) return redirect()->route('publicSite');
        return view('loggedHome');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
