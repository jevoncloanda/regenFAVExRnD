<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getCreateEventPage()
    {
        return view('admin.createEvent');
    }

    public function createEvent(EventRequest $request)
    {
        $path = $request->file('image')->store('public/images');
        $path = substr($path, strlen('public/'));
        Event::create([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'date' => $request->date,
            'price' => $request->price,
            'location' => $request->location,
            'image' => $path,
        ]);
        return redirect(route('getAdminDashboard'));
    }

    public function getEvents()
    {
        $events = Event::all();
        return view('view', ['events' => $events]);
    }

    public function getEventById($id)
    {
        $event = Event::find($id);
        return view('admin.updateEvent', ['event' => $event]);
    }

    public function updateEvent(EventRequest $request, $id)
    {
        $path = $request->file('image')->store('public/images');
        $path = substr($path, strlen('public/'));
        $event = Event::find($id);
        $event->update([
            'name' => $request->name,
            'category' => $request->category,
            'description' => $request->description,
            'date' => $request->date,
            'price' => $request->price,
            'location' => $request->location,
            'image' => $path,
        ]);
        return redirect(route('getAdminDashboard'));
    }

    public function deleteEvent($id)
    {
        Event::destroy($id);
        return redirect(route('getAdminDashboard'));
    }
}

