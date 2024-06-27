<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tag_id' => 'required',
            'course_id' => 'required',
            'user_specific_id' => 'required',
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048|nullable', // ajusta los tipos de archivo y el tamaño máximo según tus necesidades
            'description' => 'required|string',
            'status' => 'required|string',
            'finish_date' => 'required|date',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('public/images', $imageName); // Guarda la imagen en storage/app/public/images

            $validatedData['image'] = $imageName;
        }

        $event = Event::create($validatedData);
        return redirect()->route('events.index');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        $validatedData = $request->validate([
            'tag_id' => 'required',
            'course_id' => 'required',
            'user_specific_id' => 'required',
            'title' => 'required|string',
            'image' => 'string|nullable',
            'description' => 'required|string',
            'status' => 'required|string',
            'finish_date' => 'required|date',
        ]);

        $event->update($validatedData);
        return redirect()->route('events.index');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('events.index');
    }
}