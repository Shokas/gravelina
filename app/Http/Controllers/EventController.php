<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return Inertia::render('Events/Index', [
            'events' => $events,
        ]);
    }

    public function create()
    {
        return Inertia::render('Events/Create');
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->location = $request->input('location');
        $event->distance = $request->input('distance');
        $event->elevation_gain = $request->input('elevation_gain');
        $event->difficulty = $request->input('difficulty');
        $event->type = $request->input('type');
        $event->organizer = $request->input('organizer');
        $event->website = $request->input('website');
        $event->registration_link = $request->input('registration_link');
        $event->save();

        return Inertia::location('/events');
    }

    public function show(Event $event)
    {
        return Inertia::render('Events/Show', [
            'event' => $event,
        ]);
    }

    public function edit(Event $event)
    {
        return Inertia::render('Events/Edit', [
            'event' => $event,
        ]);
    }

    public function update(Request $request, Event $event)
    {
        $event->name = $request->input('name');
        $event->description = $request->input('description');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->location = $request->input('location');
        $event->distance = $request->input('distance');
        $event->elevation_gain = $request->input('elevation_gain');
        $event->difficulty = $request->input('difficulty');
        $event->type = $request->input('type');
        $event->organizer = $request->input('organizer');
        $event->website = $request->input('website');
        $event->registration_link = $request->input('registration_link');
        $event->save();

        return Inertia::location('/events/' . $event->id);
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return Inertia::location('/events');
    }
}
