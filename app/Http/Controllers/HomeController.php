<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Category;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {

        if (Auth::id())

            if (Auth::user()->role_as == 'user') {
                $categries = Category::all();
                return view('user.index',compact('categries'));
            } else {
        $user_count = User::count();
        $category_count = Category::count();
        $doctor_count = Doctor::count();
        $appointment_count = Appointment::count();
        return view('admin.home',compact('user_count','category_count','doctor_count','appointment_count'));
            }
        else {
            return redirect()->back();
        }
    }

    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = 'In progress';


        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()
            ->with('message', 'Appointment Requset Successful . We will contact with you soon');
    }
    public function myappointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoints = appointment::where('user_id', $userid)->get();
            return view('user.myappointment', compact('appoints'));
        } else {
            return redirect()->back();
        }
    }
    public function cancel_appoint($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();


  }
}
