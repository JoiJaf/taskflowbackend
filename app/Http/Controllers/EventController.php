<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\UserSpecific;

class EventController extends Controller
{
    public function index($id)
    {
        
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return response()->json($event);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tag_id' => 'required',
            'course_id' => 'required',
            'user_specific_id' => 'required',
            'title' => 'required|string',
            'image' => 'string',
            'description' => 'requied|string',
            'status' => 'required|string',
        ]);

        $event = Event::create($validatedData);
        return response()->json($event, 201);
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $validatedData = $request->validate([
            'tag_id' => 'required',
            'course_id' => 'required',
            'user_specific_id' => 'required',
            'title' => 'required|string',
            'image' => 'string',
            'description' => 'requied|string',
            'status' => 'required|string',
        ]);

        $event->update($validatedData);
        return response()->json($event);
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
    }

    public function listEvent($id)
    {
        // $users = UserSpecific::select('id')->where('id', $id)->get();
        // foreach ($users as $event) {
        //     $events=Event::where('user_specific_id', $event->id)->select('title')->get();
        //     $event->$event = $events;
        // }
        // return $users;

        $events = Event::where('user_specific_id', $id)->get();
        return $events;
    }

    public function specificEvent($id)
    {
        // $users = UserSpecific::select('id')->where('id', $id)->get();
        // foreach ($users as $event) {
        //     $events=Event::where('user_specific_id', $event->id)->select('title')->get();
        //     $event->$event = $events;
        // }
        // return $users;

        $events = Event::where('id', $id)->get();
        return $events;
    }

}