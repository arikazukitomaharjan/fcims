<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\CoachRepository as Coach;
use App\Repository\ClubRepository as Club;
use Folklore\Image\Facades\Image;
use App\Http\Requests\CreateCoachRequest;

use Request;
use Session;
class CoachController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Coach $coach)
	{
		return view('admin.coach.index')->with('coach',$coach->all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.coach.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCoachRequest $request,Coach $coach)
	{

	   $uploaded_file = $request->file('image_file');     


        $parameter = $request->all();

       unset($parameter['image_file']);

        $coach = $coach->create($parameter);
        
        if(isset($uploaded_file)){

           
            $ext = $uploaded_file->getClientOriginalExtension();
            $imageName = $coach->id . "." . $ext;


            $uploaded_file->move(
                base_path() . '/public/img/uploads/coach/', $imageName
            );

            Image::make(base_path() . '/public/img/uploads/coach/' . $imageName, array(
                'width' => 190,
                'height' => 121,
            ))->save(base_path() . '/public/img/uploads/thumbnails/coach/' . $imageName);
             $coach->update(array('image' => $imageName));
        }
        
        Session::flash('message', 'The Coach was successfully added!.');
        Session::flash('flash_type', 'alert-success');
		return redirect('coach');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,Coach $coach)
	{
		$coach = $coach->find($id);
        return view('pages.singleCoach', compact('coach'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,Coach $coach,Club $club)
	{
		return view('admin.coach.edit')->with('coach',$coach->find($id))->with('club', $club->all());
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreateCoachRequest $request,Coach $coach)
	{
		$player_to_update = $coach->find($id);
        $uploaded_image = $request->file('image_upload');
        $parameter = $request->all();

        if (isset($uploaded_image)) {

            $ext = $uploaded_image->getClientOriginalExtension();
            $newImageName = $player_to_update->id . "." . $ext;

            $uploaded_image->move(
                base_path() . '/public/img/uploads/coach/', $newImageName
            );

            Image::make(base_path() . '/public/img/uploads/coach/' . $newImageName, array(
                'width' => 774,
                'height' => 329,
            ))->save(base_path() . '/public/img/uploads/coach/' . $newImageName);
            $parameter = $request->all();
            $parameter['image'] = $newImageName;

            /* remove this field from the parameters list */
            unset($parameter['image_upload']);

            $player_to_update->update($parameter);

        } else {
            $player_to_update->update($request->all());
            $player_to_update->update($parameter);
        }
		
		
		  return redirect('coach');
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
