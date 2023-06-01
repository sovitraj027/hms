<?php

namespace App\Models\Model;

use App\Models\Backend\Doctor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable=['name', 'email', 'contact', 'address', 'blood_group', 'appointment_time', 'description', 'age', 'gender', 'doctor_id','user_id'];

    public function doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
