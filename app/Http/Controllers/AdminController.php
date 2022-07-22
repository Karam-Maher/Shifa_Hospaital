<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Category;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Notification;
use App\Notification\SendEmailNotification;

class AdminController extends Controller
{
    public function index()
    {
        $user_count = User::count();
        $category_count = Category::count();
        $doctor_count = Doctor::count();
        $appointment_count = Appointment::count();
        return view('admin.home',compact('user_count','category_count','doctor_count','appointment_count'));
    }
    public function showappointment()
    {
        $data = appointment::all();
        return view('admin.appointment.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }
    public function canceled($id)
    {
        $data = appointment::find($id);
        $data->status = 'canceled';
        $data->save();
        return redirect()->back();
    }
    public function emailview($id)
    {
        $data = appointment::find($id);
        return view('admin.email_view.index', compact('data'));
    }
    public function sendemail(Request $request, $id)
    {
        // $data = appointment::find($id);
        // $details = [

        //     'greeting' =>  $request->greeting,
        //     'body' =>  $request->body,
        //     'actiontext' =>  $request->actiontext,
        //     'actionurl' =>  $request->actionurl,
        //     'endpart' =>  $request->endpart,
        // ];

        // Notification::send($data, new SendEmailNotification($details));
        // return redirect()->back();
    }
}
