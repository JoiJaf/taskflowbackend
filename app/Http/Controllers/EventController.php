<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return $events;
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
}