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
    public function step1()
    {
        return view('pages.teachers.step1');
    }

    public function store1(Request $request){
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'emergency_contact'=>'required|string|max:255',
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = 'default-profile.png';

        if ($request->profile_image != null) {
            $imageName = RenameMoveImage($request->profile_image, 'images/profile_images/teachers');

            if ($imageName == false) {
                return back()->with(['error', 'Not created, Failed to create Teacher']);
            }
        }

        $request = $request->merge(['image'=>$imageName]);
        $step1Data = $request->except('profile_image');

        // unset($request->first_name,
        //     $request->middle_name,
        //     $request->last_name,
        //     $request->gender,
        //     $request->address,
        //     $request->phone,
        //     $request->email,
        //     $request->emergency_contact,
        //     $request->profile_imag,
        // );

        session()->put('teacher_step1',$step1Data);

        return redirect()->route('teacher.step2')->with(['success' => 'Step 1 data saved']);
    }

    public function step2()
    {
        return view('pages.teachers.step2');
    }

    public function store2(Request $request){
        
        $request->validate([
            'tsc_no' => 'required|string|max:100',
            'date_of_hire' => 'required|date',
            'department' =>'required|string|max:255',
            'position' => 'required|string|max:255',
            'subjects' => 'required|array'
        ]);


        $data1 = session()->get('teacher_step1');

        $request = $request->merge(['emergency_contact' => $data1['emergency_contact']]);
        unset($data1['emergency_contact']);
        $data1['password'] = Hash::make('1234567');
        
        $subjects = implode(',', $request->subjects);

        User::create($data1);
        $request = $request->merge(['user_id' => User::latest()->first()->id, 'subjects' => $subjects]);

        Teacher::create($request->all());

        session()->forget('teacher_step1');

        return redirect()->route('home')->with(['success' => 'Teacher created successfully']);
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
