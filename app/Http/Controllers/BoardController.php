<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestClient;
use App\Http\Requests\RequestEvent;
use App\Models\Board;
use App\Models\Event;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function start()
    {
        return view('start');
    }

    public function indexclient()
    {
        return view('indexclient');
    }

    public function storeclient(RequestClient $request)
    {
        $client = new Board();

        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->email = $request->email;
        $client->birth = $request->birth; 
        $client->street = $request->street; 
        $client->number = $request->number; 
        $client->complement = $request->complement; 
        $client->city = $request->city; 
        $client->state = $request->state; 
        $client->cep = $request->cep; 
        $client->cellphone = $request->cellphone; 
        $client->cellphone2 = $request->cellphone2;

        $client->save();

        return redirect('home');
    }

    public function searchclient(Board $client)
    {
        $clients = $client->all();

        $search_client = request('search');
        $clients = Board::where('name', 'like', '%'.$search_client.'%')->get();

        return view('client/searchclient', compact('clients'));
    }

    public function showclient(string $id, Event $event)
    {
        $events = $event->all();

        if(!$client = Board::find($id))
        {
            return back();
        }
        return view('client/showclient', compact('client', 'events'));
    }

    public function editclient(Board $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }
        return view('client/editclient', compact('client'));
    }

    public function updateclient(RequestClient $request, Board $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }

        $client->update($request->only([
        'name',
        'cpf',
        'email',
        'birth', 
        'street', 
        'number', 
        'complement', 
        'city', 
        'state', 
        'cep', 
        'cellphone', 
        'cellphone2'
        ]));

        return view('client/showclient', compact('client'));
    }

    public function destroyclient(Board $client, string $id)
    {
        if(!$client = $client->find($id))
        {
            return back();
        }
        $client->delete();

        return view('indexclient');
    }
}