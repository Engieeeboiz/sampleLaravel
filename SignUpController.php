<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SignUpController extends Controller
{
    public function Register(Request $request) {

        \Log::info($request->all());
        try {
            $request->validate([
                'user_lastName' => 'required|string|max:255',
                'user_firstName' => 'required|string|max:255',
                'user_middleName' => 'required|string|max:255',
                'user_age' => 'required|string|max:100',
                'user_gender' => 'required|string|max:10',
                'user_birthday' => 'required|string|max:100',
                'user_birthmonth' => 'required|string|max:100',
                'user_birthyear' => 'required|string|max:100',
                'user_email' => 'required|string|max:255',
                'user_password' => 'required|string|min:8|max:100',
                'user_contact' => 'required|string|min:11|max:11',

            ]);

            User::create ([
                'last_name' => $request -> user_lastName,
                'first_name' => $request -> user_firstName,
                'middle_name' => $request -> user_middleName,
                'age' => $request -> user_age,
                'gender' => $request -> user_gender,
                'birth_day' => $request -> user_birthday,
                'birth_month' => $request -> user_birthmonth,
                'birth_year' => $request -> user_birthyear,
                'email' => $request -> user_email,
                'password' => bcrypt($request -> user_password),
                'mobile_number' => $request -> user_contact,
            ]);

            return redirect()->route('welcome')->with('success', 'Registration successful! Please log in.');

        }
        
        catch (\Exception $e)
        {
            // Log the error for debugging
            \Log::error($e->getMessage());

            return back()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }
}
