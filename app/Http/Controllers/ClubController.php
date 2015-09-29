<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\ClubRepository as Club;
use App\Repository\PlayerRepository as Player;
use App\Http\Requests\CreateClubRequest;
use Folklore\Image\Facades\Image;
use Request;
use Session;
class ClubController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Club $club)
	{
		
		return view('admin.club.index')->with('club',$club->all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.club.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateClubRequest $request,Club $club)
	{
				
	$uploaded_file = $request->file('image_file');     


        $parameter = $request->all();

       unset($parameter['image_file']);

        $club = $club->create($parameter);
        
        if(isset($uploaded_file)){

           
            $ext = $uploaded_file->getClientOriginalExtension();
            $imageName = $club->id . "." . $ext;


            $uploaded_file->move(
                base_path() . '/public/img/uploads/club/', $imageName
            );

            Image::make(base_path() . '/public/img/uploads/club/' . $imageName, array(
                'width' => 160,
                'height' => 200,
            ))->save(base_path() . '/public/img/uploads/thumbnails/club/' . $imageName);
             $club->update(array('image' => $imageName));
        }
        
        Session::flash('message', 'The Club was successfully added!.');
        Session::flash('flash_type', 'alert-success');
       
        
        return redirect('clubs');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,Club $club,Player $player)
	{
		$club = $club->find($id);
		
       $member = $club->find(2)->player;
 
        return view('pages.singleClub', compact('club','player','member'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,Club $club)
	{
		return view('admin.club.edit')->with('club', $club->find($id));
   
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreateClubRequest $request,Club $club)
	{
		$player_to_update = $club->find($id);
        $uploaded_image = $request->file('image_upload');
        $parameter = $request->all();

        if (isset($uploaded_image)) {

            $ext = $uploaded_image->getClientOriginalExtension();
            $newImageName = $player_to_update->id . "." . $ext;

            $uploaded_image->move(
                base_path() . '/public/img/uploads/club/', $newImageName
            );

            Image::make(base_path() . '/public/img/uploads/club/' . $newImageName, array(
                 'width' => 160,
                'height' => 200,
            ))->save(base_path() . '/public/img/uploads/thumbnails/club/' . $newImageName);
            $parameter = $request->all();
            $parameter['image'] = $newImageName;

            /* remove this field from the parameters list */
            unset($parameter['image_upload']);

            $player_to_update->update($parameter);

        } else {
            $player_to_update->update($request->all());
            $player_to_update->update($parameter);
        }

		return redirect('clubs');
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
