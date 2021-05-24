<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Collection;
use Carbon\Carbon;

use App\Models\Events;
use App\Models\EventDatetimes;
use App\Models\EventRegistrants;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Upcoming Events
        if ($request->eventType == 1) {
            $upcomingEventId = EventDateTimes::WhereDate('date', '>', Carbon::now())->OrderBy('date', 'DESC')->get()->pluck('event_id');
            $events = Events::WhereIn('id', $upcomingEventId)->With('datetimes')->get();
        }
        // Past Events
        else if ($request->eventType == 2) {
            $pastEventId = EventDateTimes::WhereDate('date', '<=', Carbon::now())->OrderBy('date', 'DESC')->get()->pluck('event_id');
            $events = Events::WhereIn('id', $pastEventId)->With('datetimes')->get();
        }
        // All Events
        else {
            $events = Events::all();
        }

        return response()->json([
            'status' => 'success',
            'data' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Events::Where('id', $id)
            ->With('contactPersons', 'facilities', 'fees.feeType:id,name', 'eventSpeakerActivities.speaker:id,name,linkedin', 'datetimes')
            ->first();

        $eventStatus;
        $countRegistrant  = EventRegistrants::Where('event_id', $id)->count();
        if ($countRegistrant < $event->capacity || $event->capacity == null) { $eventStatus = true; }
        else { $eventStatus = false; }

        $data = Collection::make([
            "event" => $event,
            "status" => $eventStatus
        ]);
        
        return response()->json([
            'status' => 'success',
            'data' => $data
        ], 200, [], JSON_NUMERIC_CHECK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getByEventType($eventType) {
        return response()->json($eventType);
    }
}
