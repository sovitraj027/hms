<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;
use Illuminate\Http\Request;
use App\Models\Backend\Doctor;
use App\Models\Model\Appointment;
use Carbon\Carbon;

class AppointmentController extends Controller
{

    public function index()
    {
        $appointments=Appointment::all();
        return view('backend.appointment.index',[
            'appointments'=> $appointments
        ]);
    }

    public function create(){
        return view('backend.appointment.create',[
            'doctors' => Doctor::latest()->get()
        ]);
    }

    public function getDocotors($specialist){
        $doctors = Doctor::where('specialist', $specialist)->get();
        if (count($doctors) > 0) {
            return response()->json($doctors);
        }
    }


    public function store(AppointmentRequest $request){

        $input=$request->except('_token','_method');
        $appointment_time = Carbon::createFromFormat('l d F Y - H:i', $request->appointment_time);

        $input["appointment_time"] = $appointment_time;
        $input["user_id"] = Auth()->user()->id;

        Appointment::create($input);

        return redirect()
            ->route('myAppointment',auth()->user()->id)
            ->with("message", "Appointment added successfully.");

    }

    public function MyAppointment($user_id){
        $appointments = Appointment::where('user_id',$user_id)->get();
        return view('backend.appointment.index', [
            'appointments' => $appointments
        ]);
    }
}
