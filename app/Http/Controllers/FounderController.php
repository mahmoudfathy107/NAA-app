<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Founder;
use App\Models\Contactus;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\ContactusMail;

class FounderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allFounder = Founder::where('name', '1')->get();
        $allFounder2 = Founder::where('name', '2')->get();
        $allFounder3 = Founder::where('name', '3')->get();
        $allFounder4 = Founder::where('name', '4')->get();
        $allFounder5 = Founder::where('name', '5')->get();
        $allFounder6 = Founder::where('name', '6')->get();
        $allFounder7 = Founder::where('name', '7')->get();
        $allFounder8 = Founder::where('name', '8')->get();
        $allFounder9 = Founder::where('name', '9')->get();
        return view('NAA-AboutUS.NAA-Foundation.Founder', compact('allFounder', 'allFounder2', 'allFounder3', 'allFounder4', 'allFounder5', 'allFounder6', 'allFounder7', 'allFounder8','allFounder9'));
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
        $user = Auth::user();

        $data = new Contactus();
        $data->user_id = Auth()->id();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;

        $mailData = [
            'subject' => $request->email,
            'title' => $request->name,
            'body' => $request->message,
        ];

        Mail::to('mahmoudfathy107@gmail.com')->send(new ContactusMail($mailData));
        $data->save();

        return redirect()->back();
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

    public function displayImage($filename)

    {
    $path = storage_public('app/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;

    }
}
