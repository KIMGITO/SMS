<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function newAdmin(){
        return view('pages.admin/create_admin');
    }

    public function adminStore(Request $request){
        $request->merge(['role' => 'Admin']);
        $request->validate([
            'first_name' => ['required','string','max:255'],
            'middle_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'phone' => ['required','string','max:255'],
            'address'=>['required','string','max:255'],
            'gender' => ['required','in:male,female'],
        ]);
        $request->merge(['password'=>Hash::make($request->password)]);
        

        User::create($request->all());
        // Teacher::create($request->only(['']))


        return redirect()->route('login')->with(['success' => 'Admin created successfully']);
    }

    public function login() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');
        // Attempt to log the user in
        if (!auth()->attempt($credentials)) {
            // User::create([
            //     'name' => 'admin',
            //     'email' => 'admin@test.com',
            //     'role' => 'admin',
            //     'password' => Hash::make('password')
            // ]);
            return back()->withErrors(['error' => 'Invalid email or password'])->withInput($request->all()); 
        }

        return redirect()->route('home')->with(['success' =>'Enjoy']);
    
        // If the authentication attempt fails...
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('login');
    }

    public function register() {
        return view('register');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','string','min:8','confirmed'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
        ]);


        return redirect()->route('home');
        // Registration logic...
        
        }
        // ...
        // Rest of the code...
        // ...
        // Password confirmation validation...
        // ...
        // Password encryption...
        // ...
        // Redirect to home page...
        // ...
    
    
}
