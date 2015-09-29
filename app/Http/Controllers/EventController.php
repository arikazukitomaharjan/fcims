<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\EventRepository as Event;
use App\Repository\ClubRepository as Club;
use App\Repository\ChampionshipDetailRepository as Championship;
use Folklore\Image\Facades\Image;
use App\Http\Requests\CreateEventRequest;
use Illuminate\Http\Request;
use Session;

class EventController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Event $event)
	{
		$events=$event->all();
		return view('admin.events.index',compact('events'));	
	}

	/**
	 * Show the form for creating a new resource.
	 *
 * @return Response
	 */
	public function create(Club $club,Championship $championship)
	{
		$club=$club->lists('name','id');
		$championship=$championship->lists('championship_name','id');
         return view('admin.events.create',compact('club','championship'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Event $event,CreateEventRequest $request)
	{
		$ext1 = $request->file('image_home')->getClientOriginalExtension();
		$ext2 = $request->file('image_away')->getClientOriginalExtension();
        $event = $event->create($request->all());

        $imageName1 = $event->id . "." . $ext1;
        $imageName2= $event->id . "." . $ext2;

        $request->file('image_home')->move(
            base_path() . '/public/img/uploads/home/', $imageName1
        );

        Image::make(base_path() .'/public/img/uploads/home/' . $imageName1, array(
            'width' => 125,
            'height' => 100,
        ))->save(base_path() .'/public/img/uploads/home/'.$imageName1);


        $request->file('image_away')->move(
            base_path() . '/public/img/uploads/away/', $imageName2
        );

        Image::make(base_path() .'/public/img/uploads/away/' . $imageName2, array(
            'width' => 125,
            'height' => 100,
        ))->save(base_path() .'/public/img/uploads/away/'.$imageName2);

        $event->update(array('image_home' => $imageName1));
        $event->update(array('image_away' =>  $imageName2));
        
        Session::flash('message', 'The event was successfully added!.');
        Session::flash('flash_type', 'alert-success');

        return redirect('events');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,Event $event,Club $club,Championship $championship)
	{
		return view('admin.events.edit')->with('event', $event->find($id))->with('championship',$championship->lists('championship_name','id'))->with('club',$club->lists('name','id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreateEventRequest $request,Event $event)
	{
	

        $event->find($id)->update($request->all());

        Session::flash('message', 'The event was successfully updated!.');
        Session::flash('flash_type', 'alert-success');


        return redirect('events');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
