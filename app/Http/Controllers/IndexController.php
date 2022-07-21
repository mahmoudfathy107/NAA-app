<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\ContactusMail;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $message = $request->message;
        return view('NAA-Index.index', compact('message'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create(Request $request)
    {
        $message = $request->message;
        if (request('id')) {
             $payment_status = $this->getPaymentStatus(request('id'));
             if (isset($payment_status['id'])) { //success payment id -> transaction bank id
                 $showSuccessPaymentMessage = true;
                 $user = Auth::user();

                 $data = new Contactus();
                 $data->user_id = Auth::id();
                 $data->name = $payment_status["card"]["holder"];
                 $data->message = $request->message;
                 $data->paymentId = $payment_status['id'];
                 $data->paymentBrand = $payment_status['paymentBrand'];
                 $data->amount = $payment_status['amount'];
                 $data->currency = $payment_status['currency'];
                 $data->result = $payment_status['result']['description'];
                 $mailData = [
                     'subject' => 'NAA App Message',
                     'title' => $payment_status["card"]["holder"],
                     'body' => $request->message,
                 ];

                 Mail::to('mahmoudfathy107@gmail.com')->send(new ContactusMail($mailData));
                 $data->save();
                 //save order in orders table with transaction id  = $payment_status['id']
               return view('NAA-Index.create', compact('message'))-> with(['success' =>  'تم الدفغ بنجاح']);
           } else {
               $showFailPaymentMessage = true;
                return view('NAA-Index.create')-> with(['fail'  => 'فشلت عملية الدفع']);
           }

       }

       return view('NAA-Index.create', compact('message'));
    }

    function getPaymentStatus($id){
        $url = "https://test.oppwa.com/v1/checkouts/$id/payment";
	    $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);

        return json_decode($responseData, true);
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
