<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repository\ChampionshipDetailRepository as Championship;
use App\Http\Requests\CreateChampionshipDetailRequest;

use Session;

class ChampionshipDetailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
public function index(Championship $championship)
	{
		return view('admin.championship.index')->with('championship',$championship->all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Championship $champtionship)
	{
		return view('admin.championship.create');
	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateChampionshipDetailRequest $request,Championship $champtionship)
	{
		$champtionship->create($request->all());
		Session::flash('message', 'The Photo was successfully added!.');
        Session::flash('flash_type', 'alert-success');  
		return redirect('championship');
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
	public function edit($id,CreateChampionshipDetailRequest $request,Championship $championship)
	{

dd($request->all());
		return view('admin.championship.edit')->with('championship',$championship->find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreateChampionshipDetailRequest $request,Championship $champtionship)
	{
		$champtionship->find($id)->update($request->all());
		return redirect('championship');
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
