<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repository\ClubHistoryRepository as ClubHistory;
use App\Repository\ChampionshipDetailRepository as ChampionshipDetail;
use App\Repository\ClubRepository as Club;
use App\Repository\PlayerRepository as player;
use App\Http\Requests\CreateClubHistoryRequest;

use Session;
class ClubHistoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(ClubHistory $clubhistories)
	{
		return view('admin.clubhistories.index')->with('clubhistories',$clubhistories->all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(ChampionshipDetail $championship,Club $club,Player $player)
	{
		return view('admin.clubhistories.create')->with('championship',$championship->all())->with('club',$club->all())->with('player',$player->all());
	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateClubHistoryRequest $request,ClubHistory $clubhistories)
	{
		
		
		 $clubhistories->create($request->all());
        
        Session::flash('message', 'The Photo was successfully added!.');
        Session::flash('flash_type', 'alert-success');      
        
        return redirect('clubhistories');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,ClubHistory $clubhistories)
	{
		$club=$clubhistories->find($id);

        $clubhistories=$clubhistories->getPlayerByCLub($id);
		return view('pages.singleClub',compact('club','clubhistories'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,ClubHistory $clubhistories,Club $club,ChampionshipDetail $championship)
	{
		return view('admin.clubhistories.edit')->with('clubhistories', $clubhistories->find($id))->with('club', $club->all())->with('championship', $championship->all());
   
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,ClubHistory $clubhistories,CreateClubHistoryRequest $request)
	{
		$clubhistories->find($id)->update($request->all());
		return redirect('clubhistories');
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
	public function save(CreateClubHistoryRequest $request,ClubHistory $clubhistories)
	{
		 dd('hello');
	}
	
}
