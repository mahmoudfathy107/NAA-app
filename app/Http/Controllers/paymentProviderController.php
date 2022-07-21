<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentProviderController extends Controller
{
    public function getCheckoutID(Request $request){
        $url = "https://eu-test.oppwa.com/v1/checkouts";
	    $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
                "&amount=3.00" .
                "&currency=USD" .
                "&paymentType=DB";

        $message = $request->message;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $res = json_decode($responseData, true);

        $view = view('ajax.form', compact('message'))->with(['responseData' => $res, 'message' => $message])
            ->renderSections();

        return response()->json([
            'status' => true,
            'content' => $view['content']
        ]);
    }


    public function getDonateCheckoutID(Request $request){
        $donationAmount = $request->donationAmount;
        $url = "https://eu-test.oppwa.com/v1/checkouts";
	    $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
                "&amount=" . $request->input('donationAmount') .
                "&currency=USD" .
                "&paymentType=DB";

        $email = $request->email;
        $message = $request->message;
        $donationAmount = $request->donationAmount;
        $workWithUs = $request->get('workWithUs');
        $getLegalAdvice = $request->get('getLegalAdvice');
        $advirtiseWithUs = $request->get('advirtiseWithUs');
        $publishWithUs = $request->get('publishWithUs');
        $takePicture = $request->get('takePicture');
        $Donate = $request->get('Donate');
        $WatchEpisodes = $request->get('WatchEpisodes');
        $butAbook = $request->get('butAbook');
        $translate = $request->get('translate');
        $other = $request->get('other');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $res = json_decode($responseData, true);

        $view = view('ajax.donateform', compact('email','message','donationAmount','workWithUs','getLegalAdvice','advirtiseWithUs','publishWithUs','takePicture','Donate','WatchEpisodes','butAbook','translate','other'))->with(['responseData' => $res, 'message' => $message])
            ->renderSections();

        return response()->json([
            'status' => true,
            'content' => $view['content']
        ]);
    }

    public function getContactUSCheckoutID(Request $request){
        $url = "https://eu-test.oppwa.com/v1/checkouts";
	    $data = "entityId=8a8294174b7ecb28014b9699220015ca" .
                "&amount=3.00" .
                "&currency=USD" .
                "&paymentType=DB";

        $email = $request->email;
        $message = $request->message;
        $workWithUs = $request->get('workWithUs');
        $getLegalAdvice = $request->get('getLegalAdvice');
        $advirtiseWithUs = $request->get('advirtiseWithUs');
        $publishWithUs = $request->get('publishWithUs');
        $takePicture = $request->get('takePicture');
        $Donate = $request->get('Donate');
        $WatchEpisodes = $request->get('WatchEpisodes');
        $butAbook = $request->get('butAbook');
        $translate = $request->get('translate');
        $other = $request->get('other');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        $res = json_decode($responseData, true);

        $view = view('ajax.contactusform', compact('email','message','workWithUs','getLegalAdvice','advirtiseWithUs','publishWithUs','takePicture','Donate','WatchEpisodes','butAbook','translate','other'))->with(['responseData' => $res])
            ->renderSections();

        return response()->json([
            'status' => true,
            'content' => $view['content']
        ]);
    }

}
