<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\BasicMessage;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    public function email(Request $request) {
      $request->validate([
        'email' => 'string|required',
        'name' => 'string|required',
        'title' => 'string|required',
        'content' => 'string'
      ]);
      session()->flash('flashMessage','Message Sent');
      Mail::to('nicholas.vogt2017@gmail.com')->send(new BasicMessage($request->title,$request->content,$request->email,$request->name));
      return redirect()->route('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
