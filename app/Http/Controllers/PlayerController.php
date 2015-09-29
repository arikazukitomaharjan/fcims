<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\PlayerRepository as Player;
use App\Repository\ClubRepository as Club;
use Folklore\Image\Facades\Image;
use App\Http\Requests\CreatePlayerRequest;

use Request;
use Session;
class PlayerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
   

     


    public function index(Player $player)
	{	

		$players=$player->all();
		
        return view('admin.players.index',compact('players'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
        return view('admin.players.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreatePlayerRequest $request,Player $player)
	{
		$uploaded_file = $request->file('image_file');     


        $parameter = $request->all();

       unset($parameter['image_file']);

        $player = $player->create($parameter);
        
        if(isset($uploaded_file)){

           
            $ext = $uploaded_file->getClientOriginalExtension();
            $imageName = $player->id . "." . $ext;


            $uploaded_file->move(
                base_path() . '/public/img/uploads/player/', $imageName
            );

            Image::make(base_path() . '/public/img/uploads/player/' . $imageName, array(
                'width' => 160,
                'height' => 200,
            ))->save(base_path() . '/public/img/uploads/thumbnails/player/' . $imageName);
             $player->update(array('image' => $imageName));
        }
       
        
        Session::flash('message', 'The Player was successfully added!.');
        Session::flash('flash_type', 'alert-success');
       
        
        return redirect('players');

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id,Club $club,Player $player)
	{
		return view('admin.players.edit')->with('player', $player->find($id))->with('club', $club->all());
   
       
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,CreatePlayerRequest $request,Player $player)
	{

		$player_to_update = $player->find($id);
        $uploaded_image = $request->file('image_upload');
        $parameter = $request->all();

        if (isset($uploaded_image)) {

            $ext = $uploaded_image->getClientOriginalExtension();
            $newImageName = $player_to_update->id . "." . $ext;

            $uploaded_image->move(
                base_path() . '/public/img/uploads/player/', $newImageName
            );

            Image::make(base_path() . '/public/img/uploads/player/' . $newImageName, array(
               'width' => 160,
                'height' => 200,
            ))->save(base_path() . '/public/img/uploads/thumbnails/player/' . $newImageName);
            $parameter = $request->all();
            $parameter['image'] = $newImageName;

            /* remove this field from the parameters list */
            unset($parameter['image_upload']);

            $player_to_update->update($parameter);

        } else {

            $player_to_update->update($parameter);
        }
        Session::flash('message', 'The player was successfully updated!.');
        Session::flash('flash_type', 'alert-success');
        

        return redirect('players');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,Player $player)
	{
		
		$player->find($id)->delete();

        return redirect('player');
	}

    public function delete($id)
    {
        $this->player->find($id)->delete();

        return redirect('player');
    }

     public function getPlayerByClub(Player $player, $albumID)
    {
        $players = $player->getPlayerByClub($player, $albumID, 18);
      

        return view('admin.players.index', compact('players'));
    }

    public function getAllPlayer(Player $player)
    {

    	return $player->all();
    }

    public function playerSearch(Player $Player, CreatePlayerRequest $request)
    {


        $search_text = $request->input('search_text');

        $players = $player->postPlayerSearch($search_text);


        return view('pages.searchArticle', compact('players'));
    }
}
