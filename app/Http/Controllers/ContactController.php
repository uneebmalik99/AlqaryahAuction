<?php

namespace App\Http\Controllers;

use App\Mail\ResponseMail;
use App\Models\Contact;
use App\Models\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
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
        return view('contactUs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);
        Contact::create($request->all());
        return back()->with(['success' => 'thank you for your feedback']);
    }
    public function showMail()
    {
        return view('emails.sendemail');
    }

    public function sendmail(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'response' => 'required'
        ]);
        $contact = Contact::find(1);
        $msgResponse = new Response();
        $msgResponse->title = $request->title;
        $msgResponse->response = $request->response;
        $msgResponse->contact_id = 1;
        $msgResponse->save();
        Mail::to($contact->email)->send(new ResponseMail($msgResponse));
        return back()->with(['success' => 'mail send successfully']);
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
