<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Category;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::latest()->paginate(5);
        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::select(['id', 'name'])->get();
        return view('admin.doctors.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'phone' => 'required',
            'room' => 'required',
            'category_id' => 'required'
        ]);
        // Upload image
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_img_name = 'clinics_mana_' . time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads/doctors/'), $new_img_name);
        Doctor::create([
            'name' => $request->name,
            'image' => $new_img_name,
            'phone' => $request->phone,
            'room' => $request->room,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('doctor.index')
        ->with('success', 'Doctor Added Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        $categories = Category::select(['id', 'name'])->get();
        return view('admin.doctors.edit', compact('doctor','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image',
            'phone' => 'required',
            'room' => 'required',
            'category_id' => 'required',
        ]);
        $new_img_name = $doctor->image;
        if ($request->has('image')) {
            // Upload image
            $ex = $request->file('image')->getClientOriginalExtension();
            $new_img_name = 'clinics_mana_' . time() . '.' . $ex;
            $request->file('image')->move(public_path('uploads/doctors/'), $new_img_name);
        }
        
        // add value
        $doctor->update([
            'name' => $request->name,
            'image' => $new_img_name,
            'phone' => $request->phone,
            'room' => $request->room,
        ]);

        return redirect()->route('doctor.index')
        ->with('success', 'Doctor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('doctor.index')
        ->with('success', 'Doctor Deleted Successfully');
    }
}
