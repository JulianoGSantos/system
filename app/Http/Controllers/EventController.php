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
}
