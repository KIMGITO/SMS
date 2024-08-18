<?php

namespace App\Http\Controllers;

use App\Models\Gurdian;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class GurdianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.gurdian/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255|unique:users',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'gender' => 'required|string|in:male,female',
            'id_no' => 'required|string|max:50|unique:gurdians'
        ]);
        $imageName = 'default-profile.png';
        if ($request->hasFile('profile_image')) {
            $imageName = RenameMoveImage($request->profile_image, 'images/profile_images/gurdians');
        }
        

        if($imageName === false) {
            return back()->with(['error' => 'Not Created, Error ocxcured while uploading profile image']);
        }
       $request =  $request->merge(['image' => $imageName, 'password'=> Hash::make('123456'),'role'=>'parent'] );

        User::create($request->all());
        Gurdian::create([
            'user_id' => User::latest()->first()->id,
            'id_no'=> $request->id_no
        ]);

        return redirect()->route('home')->with('success', 'Parent/Gurdian created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gurdian $gurdian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gurdian $gurdian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gurdian $gurdian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gurdian $gurdian)
    {
        //
    }
}
