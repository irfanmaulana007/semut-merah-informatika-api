<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

use App\Mail\PaymentMail;
use App\Mail\RegistrantMail;
use App\Models\Events;

class MailController extends Controller
{
    public function paymetntView() {
        $data = [
            "name" => "irfan",
            "company" => "Semut Merah Informatika",
            "email" => "irfanmaulana695@gmail.com",
            "phone" => "08617289193",
            "code" => "EVT21030117903",
        ];
        $occupation = "Website Engineer";
        $payment_amount = 100000;

        $date = Carbon::now();
        $date = date('d M Y  H:i:s', strtotime($date));

		return view('emails.payment')
                ->with(['data' => $data, 'date' => $date, 'occupation' => $occupation, 'payment_amount' => $payment_amount]);
    }

    public function registrantView() {
        $data = [
            "event_id" => 3,
            "name" => "irfan",
            "company" => "Semut Merah Informatika",
            "email" => "irfanmaulana695@gmail.com",
            "phone" => "08617289193",
            "code" => "EVT21030117903",
        ];

        $date = Carbon::now();
        $event = Events::Where('id', $data['event_id'])->first();
        $date = date('d M Y  H:i:s', strtotime($date));

		return view('emails.registrant')
                ->with(['data' => $data, 'date' => $date, 'event' => $event]);
    }

    public function sendPaymentMail(Request $request) {
        $data = $request->data;
		$date = Carbon::now();
        $date = date('d M Y  H:i:s', strtotime($date));
        $occupation = $request->occupation;
        $payment_amount = $request->payment_amount;

        try {
			Mail::to($data['email'])->send(new PaymentMail($data, $date, $occupation, $payment_amount));
			
			return response()->json('success');
    	} catch (\Exception $e) {
    		return $e->getMessage();
    	}
        
    }

    public function sendRegistrantMail(Request $request) {
        $data = $request->data;
		$date = Carbon::now();
        $date = date('d M Y  H:i:s', strtotime($date));
        $event = Events::Where('id', $data['event_id'])->first();

        try {
			Mail::to($data['email'])->send(new RegistrantMail($data, $date, $event));
			
			return response()->json('success');
    	} catch (\Exception $e) {
    		return $e->getMessage();
    	}
        
    }
}
