<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Gurdian;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('user')->orderBy('class')->paginate(6);
        return view('pages.students/list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.students/create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:225',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'dob' => 'required|date',
            'address' => 'required|string|max:255',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'class' => 'required|string|max:255',
            'gurdian_id_no' => 'nullable|string|max:50'
        ]);

        $imageName = 'default-profile.png';

        if($request->gurdian_id_no !== null){
            $parentid = Gurdian::where('id_no', $request->gurdian_id_no)->pluck('id')->first();
            if ($parentid == null) {
                return  back()->with(['error' => 'Parent with that id does not exist'])->withInput()->withErrors(['gurdian_id_no' => 'Parent with this id number does not exist']);
            }
        }


        if ($request->hasFile('profile_image')) {
            $imageName = RenameMoveImage($request->profile_image, 'images/profile_images/students');

            if ($imageName === false) {
                return back()->with(['error' => 'Student Not created, Error when uploading image']);
            }
        }

        $request = $request->merge(['password' => Hash::make('123456'),'role'=>'student','image'=>$imageName]);
       
        User::create($request->all());
        Student::create([
            'dob' => $request->dob,
            'class' => $request->class,
            'user_id' => User::latest()->first()->id,
            'gurdian_id' => Gurdian::latest()->first()->id
        ])->gurdian()->attach(($request->parent_id_no !== null) ? $parentid : Gurdian::latest()->first()->id, ['relationship' => $request->relationship]);



     return back()->with(['success'=> 'Student created successfully']);
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
