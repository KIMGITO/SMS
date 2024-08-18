<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // app/Http/Controllers/TeacherController.php

    public function index()
    {
        $teachers = Teacher::with('user')->paginate(6);
        // dd($teachers);
        return view('pages.teachers.list', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required|string|max:255',
            // 'dob' => 'required|date',
            // 'nationality' => 'required|string|max:255',
            // 'religion' => 'required|string|max:255',
            // 'education' => 'required|string|max:255',
            // 'experience' => 'required|string|max:255',
            // 'skills' => 'required|string|max:255',
            // 'projects' => 'required|string|max:255',
            // 'publications' => 'required|string|max:255',
            // 'achievements' => 'required|string|max:255',
            // 'languages' => 'required|string|max:255',
            // 'hobbies' => 'required|string|max:255',
            // 'other_info' => 'required|string|max:255',

        ]);


        $imageName = 'default-profile.png';

        if ($request->profile_image != null) {
            $imageName = RenameMoveImage($request->profile_image, 'images/profile_images/teachers');
            
            if($imageName == false){
                return back()->with(['error', 'Not created, Failed to create Teacher']);
            }
        }

        $request = $request->merge(['password' => Hash::make('123456'), 'role'=>'teacher' ,'image' => $imageName]);

        User::create($request->all());


        $request = $request->merge(['user_id' => User::latest()->first()->id]);
        Teacher::create($request->only('user_id'));

        return redirect()->route('home')->with('success', 'Teacher created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
