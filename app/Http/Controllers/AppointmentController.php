<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestAppointment;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function indexappointment(){
        return view('indexappointment');
    }

    public function storeappointment(RequestAppointment $request)
    {
        $client = new Appointment();

        $client->name = $request->name;
        $client->description = $request->description;

        $client->save();

        return redirect('home');
    }

    public function searchappointment(Appointment $client)
    {
        $clients = $client->all();

        return view('client/searchclient', compact('clients'));
    }

    public function showappointment(string $id)
    {
        if(!$client = Appointment::find($id))
        {
            return back();
        }
        return view('client/showclient', compact('client'));
    }

    public function editclient(Appointment $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }
        return view('client/editclient', compact('client'));
    }

    public function updateappointment(RequestAppointment $request, Appointment $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }

        $client->update($request->only([
        'name',
        'description'
        ]));

        return view('client/showclient', compact('client'));
    }

    public function destroyappointment(Appointment $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }
        $client->delete();

        return view('indexclient');
    }
}
