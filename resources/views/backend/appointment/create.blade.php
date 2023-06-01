@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Appointment Create</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Appointment</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">list</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="card">
            <div class="card-header">
                <h2 class="lead text-center">Create a New Appointment</h2>
            </div>
            <div class="card-body">
                <form action="{{route('appointment.store')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="" for="val-username">Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="val-username" name="name" value="{{ old('name') }}" placeholder="Enter Name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="" for="val-username">Email
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Enter email..">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row">

                        {{-- <div class="form-group col-lg-6">
                            <label class="" for="val-username">Confirm Password
                                <span class="text-danger">*</span>
                            </label>
                            <input type="password" class="form-control" name="password_confirmation" id="" value="" autocomplete="off">
                            @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> --}}
            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                    <label class="" for="contact">Contact
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="contact" value="{{old('contact')}}" name="contact">
                    @error('contact') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-lg-6">
                    <label class="" for="address">Address
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" name="address" id="email" value="{{ old('address') }}" autocomplete="off">
                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row">
                 <div class="form-group col-lg-6">
                     <label class="" for="contact">Select Department
                         <span class="text-danger">*</span>
                     </label>
                     <select  id="doctor_specialist" class="form-control">
                         <option value="">--Select Department--</option>
                         <option value="Radiologist">Radiologist</option>
                         <option value="Surgen">Surgen</option>
                         <option value="Physcian">Physcian</option>
                         <option value="Gynocologyst">Gynocologyst</option>
                     </select>
                     @error('specialist') <span class="text-danger">{{ $message }}</span> @enderror
                 </div>

                {{-- <div class="form-group col-lg-6">
                    <label class="" for="contact">Available Doctors
                        <span class="text-danger">*</span>
                    </label>
                    <select name="doctor_id" id="" class="form-control">
                        <option value="">--Select Doctor--</option>

                        @foreach ($doctors as $doctor )
                        <option value="{{$doctor->id}}"> {{$doctor->name}} </option>
                        @endforeach

                    </select>
                    @error('doctor_id') <span class="text-danger">{{ $message }}</span> @enderror
                </div> --}}
                 <div class="form-group col-lg-6">
                     <label class="" for="val-username">Available Doctor
                         <span class="text-danger">*</span>
                     </label>
                     <select class="form-control" id="doctor" name="doctor_id">
                     </select>
                     @error('doctor_id')

                     <span class="text-danger">{{ $message }}</span>
                     @enderror
                 </div>

            </div>

            <div class="row">
                <div class="form-group col-lg-6">
                    <label class="" for="join date">Appointment Time
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" value="{{old('appointment_time')}}" id="date-format" name="appointment_time">

                    @error('appointment_time') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="form-group col-lg-6">
                    <label class="" for="contact">Gender
                        <span class="text-danger">*</span>
                    </label>
                    <select name="gender" id="" class="form-control">
                        <option value="">--Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                    @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label class="" for="contact">Blood Group
                        <span class="text-danger"></span>
                    </label>
                    <select name="blood_group" id="" class="form-control">
                        <option value="">--Select Blood Group</option>
                        <option value="A+">(A+)</option>
                        <option value="A-">(A-)</option>
                        <option value="B+">(B+)</option>
                        <option value="B-">(B-)</option>
                        <option value="O+">(O+)</option>
                        <option value="O-">(O-)</option>
                        <option value="AB+">(AB+)</option>
                        <option value="AB-">(AB-)</option>

                    </select>
                    @error('blood_group') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group col-lg-6">
                    <label class="" for="address">Age
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number" name="age" value="{{old('age')}}" class="form-control">
                    @error('age') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
        
            <div class="form-group col-lg-12 mt-3">
                <label class="" for="address">Description
                    <span class="text-danger">*</span>
                </label>
                <textarea name="description" class="summernote" id=""></textarea>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        $('#doctor_specialist').off('change').on('change', function() {
            var speciality = this.value;
            $('#doctor').html('');
            $('#doctor').selectpicker();
            $('#doctor').selectpicker('refresh');
            $.ajax({
                url: '/get_doctor_options/' + speciality
                , type: 'get'
                , success: function(res) {
                    $('#doctor').html('<option value="">Select Doctors</option>');
                    $.each(res, function(key, value) {
                        $('#doctor').append('<option value="' + value.id + '" data-price="' + value.price + '">' + value.name + '</option>');
                        $('#doctor').selectpicker('refresh');
                    });
                }
            });
        });
    });

</script>
@endsection

