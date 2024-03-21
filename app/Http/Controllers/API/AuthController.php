<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ModuleMaster;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function Profile(){
        $user = Auth::user();
        return view("admin.user.profile",compact('user'));
    }

    // Start Login API 
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        $token = Auth::attempt($credentials);
        
        if (!$token) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();
        return response()->json([
            'user' => $user,
            'authorization' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    // End Login API 


    // Start Register New User API 
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'string|min:6',
            'designation' => 'string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'designation' => $request->designation,
        ]);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ]);
    }
// End Register New User API 
    


//Start Logout function API
public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login')->with('Success','User Successfully Logout');
    }
//End Logout function API

//Start Refresh function API
    public function refresh()
    {
        return response()->json([
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
//End Refresh function API

public function AddUser(){
    $module = ModuleMaster::all();
    return view('createUser', compact('module'));
}




}
