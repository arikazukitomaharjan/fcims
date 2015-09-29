<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\PlayerRepository as Player;
use App\Repository\ClubRepository as Club;
use App\Repository\PlayerHistoryRepository as PlayerHistory;
use App\Http\Requests\CreatePlayerHistoryRequest;

use Session;

class PlayerHistoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(PlayerHistory $playerhistories,Club $club,Player $player)
	{
		
		return view('admin.playerhistories.index')->with('playerhistories',$playerhistories->all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Player $player,Club $club)
	{
		return view('admin.playerhistories.create')->with('players',$player->lists('name','id'))->with('club',$club->lists('name','id'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePlayerHistoryRequest $request, PlayerHistory $playerhistories)
	{
		$playerhistories->create($request->all());
		Session::flash('message', 'The history was successfully added!.');
        Session::flash('flash_type', 'alert-success');
		return redirect('playerhistories');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,PlayerHistory $player)
	{
		$players = $player->find($id);
        return view('pages.singlePlayer', compact('players'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,PlayerHistory $playerhistories,Player $player,Club $club)
	{
		return view('admin.playerhistories.edit')->with('playerhistories',$playerhistories->find($id))->with('players',$player->lists('name','id'))->with('club',$club->lists('name','id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreatePlayerHistoryRequest $request,PlayerHistory $playerhistories)
	{
		$playerhistories->find($id)->update($request->all());
		return redirect('playerhistories');
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
