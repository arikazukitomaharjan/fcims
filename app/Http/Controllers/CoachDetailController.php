<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\CoachRepository as Coach;
use App\Repository\CoachDetailRepository as CoachDetail;
use App\Repository\ClubHistoryRepository as ClubHistory;
use App\Repository\ChampionshipDetailRepository as ChampionshipDetail;
use App\Repository\ClubRepository as Club;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCoachDetailRequest;


use Session;

class CoachDetailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(CoachDetail $clubhistories)
    {
        return view('admin.coachdetail.index')->with('coach',$clubhistories->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(ChampionshipDetail $championship,Club $club,CoachDetail $coach,Coach $coach)
    {
        return view('admin.coachdetail.create')->with('championship',$championship->all())->with('club',$club->lists('name','id'))->with('coach',$coach->lists('name','id' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CreateCoachDetailRequest $request,CoachDetail $clubhistories)
    {
        $clubhistories->create($request->all());
        Session::flash('message', 'The Coach was successfully added!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('coachhistories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id,CoachDetail $clubhistories)
    {
        $coach=$clubhistories->find($id);


        return view('pages.singleCoach',compact('coach','clubhistories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id,CoachDetail $clubhistories,Club $club,ChampionshipDetail $championship,Coach $coach)
    {
        return view('admin.coachdetail.edit')->with('coachdetail', $clubhistories->find($id))->with('club',$club->lists('name','id'))->with('coach',$coach->lists('name','id' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,CoachDetail $clubhistories,CreateCoachDetailRequest $request)
    {
        $clubhistories->find($id)->update($request->all());
        Session::flash('message', 'The Coach histories was successfully updated!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('coachhistories');
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
