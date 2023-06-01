@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example5" class="display min-w850">
                            <thead>
                                <tr>
                                    <th>
                                        SN
                                    </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Assgined Doctor</th>
                                    <th>Appointment Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $appointments as $appointment)
                                <tr>
                                    <td>
                                        {{$loop->iteration}}
                                    </td>
                                    <td>{{$appointment->name}} </td>
                                    <td>{{$appointment->email}}</td>
                                    <td>{{$appointment->contact}}</td>
                                    <td>Dr. {{$appointment->doctor->name}}</td>
                                  <td>{{ \Carbon\Carbon::parse($appointment->appointment_time)->format('l d F Y \a\t h:i A') }}</td>


                                </tr>
                                @empty
                                <tr>
                                    <td>
                                        No Data Available
                                    </td>
                                </tr>

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

