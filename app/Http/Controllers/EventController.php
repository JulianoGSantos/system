<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestEvent;
use App\Models\Board;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function indexevent(){

        return view('event/indexevent');
    }

    public function storeevent(RequestEvent $request){
        $event = new Event();

        $event->name = $request->name;
        $event->date = $request->date;
        $event->description = $request->description;
        $event->boards_id = $request->boards_id;

        $event->save();

        return view('start');
    }

    public function searchevent(Event $event)
    {
        $events = $event->all();

        $search_event = request('search');
        $events = Event::where('name', 'like', '%'.$search_event.'%')->get();

        return view('event/searchevent', compact('events'));
    }

    public function showevent(string $id)
    {
        if(!$event = Event::find($id))
        {
            return back();
        }
        return view('event/showevent', compact('event'));
    }

    public function editevent(Event $event, string $id)
    {
        if(!$event = $event->find($id))
        {
            return back();
        }
        return view('event/editevent', compact('event'));
    }

    public function updateevent(RequestEvent $request, Event $event, string $id)
    {
        if(!$event = $event->find($id))
        {
            return back();
        }

        $event->update($request->only([
        'name',
        'date',
        'description',
        'board_id', 
        ]));

        return view('event/showevent', compact('event'));
    }

    public function destroyevent(Event $event, string $id)
    {
        if(!$client = $event->find($id))
        {
            return back();
        }
        $event->delete();

        return view('indexevent');
    }
}
