<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;


class EventController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::with('creator')->get();
        return view('event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users = User::where('id', '!=', auth()->id())->select('id','name')->get();
        return view('event.create',compact('users'));
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
	        'name'=>'required',
	        'description'=> 'required',
	        'startdate' => 'required',
	        'invited_users' => 'required'
      	]);

    	$path = '';
    	if($request->image){
			$path = $request->file('image')->store('image');
    	}

        $data = $request->all();
		$data['image'] =  $path;
        $data['user_id'] = auth()->id();
        $data['invited_users'] = serialize($data['invited_users']);

		$event = new Event($data);
      	$event->save();
      	return redirect('events')->with('success', 'event has been added');
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
		$event = Event::find($id);
		$users = User::where('id', '!=', auth()->id())->select('id','name')->get();

      	return view('event.edit', compact('event','users'));
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
   		$request->validate([
	        'name'=>'required',
	        'description'=> 'required',
	        'startdate' => 'required',
	        'invited_users' => 'required'
      	]);

    	$path = '';
    	if($request->image){
			$path = $request->file('image')->store('image');
    	}

        $data = $request->all();
		$data['image'] =  $path;
        $data['user_id'] = auth()->id();
        $data['invited_users'] = serialize($data['invited_users']);

		$event = Event::find($id);
      	$event->update($data);
      	return redirect('events')->with('success', 'event has been added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$event = Event::find($id);
     	$event->delete();
     	return redirect('/events')->with('success', 'Event has been deleted Successfully');
    }
}
