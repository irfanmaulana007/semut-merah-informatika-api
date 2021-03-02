<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

use App\Mail\PaymentMail;

class MailController extends Controller
{
    public function view() {
        $data = [
            "occupation" => "Website Engineer",
            "name" => "irfan",
            "company" => "Semut Merah Informatika",
            "email" => "irfanmaulana695@gmail.com",
            "phone" => "08617289193",
            "code" => "EVT21030117903",
        ];
        $payment_amount = 100000;

        $date = Carbon::now();
        $date = date('d M Y  H:i:s', strtotime($date));

		return view('emails.payment')
                ->with(['data' => $data, 'date' => $date, 'payment_amount' => $payment_amount]);
    }

    public function sendPaymentMail(Request $request) {
        $data = $request->data;
		$date = Carbon::now();
        $date = date('d M Y  H:i:s', strtotime($date));
        $occupation = $request->occupation;
        $payment_amount = $request->payment_amount;

        // try {
			Mail::to($data['email'])->send(new PaymentMail($data, $date, $occupation, $payment_amount));
			
			return response()->json('success');
    	// } catch (\Exception $e) {
    	// 	return $e->getMessage();
    	// }
        
    }
}