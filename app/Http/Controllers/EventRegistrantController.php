<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Models\EventRegistrants;

class EventRegistrantController extends Controller
{
    private $payload = ['event_id', 'occupation_id', 'name', 'companty', 'email', 'phone'];

    public function randomNumberGenerator() {
        $characters = '0123456789';

        $pin = mt_rand(1, 9)
            . mt_rand(1, 9)
            . $characters[rand(0, strlen($characters) - 1)];

        // shuffle the result
        $string = str_shuffle($pin);

        return $string;
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $code = 'EVT' . Carbon::now()->format('ymdH') . $this->randomNumberGenerator();
        $checkExistingData = EventRegistrants::Where('code', $code)->OrderBy('created_at', 'DESC')->first();

        if ($checkExistingData) {
            $this->store($request);

            return false;
        }
        
        $eventRegistrants = EventRegistrants::Create([
            "event_id" => $request->event_id,
            "occupation_id" => $request->occupation_id,
            "code" => $code,
            "name" => $request->name,
            "company" => $request->company,
            "email" => $request->email,
            "phone" => $request->phone
        ]);

        return response()->json([
            'status' => 'success',
            'data' => $eventRegistrants
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
