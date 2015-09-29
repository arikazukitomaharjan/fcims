<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Folklore\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Requests\CreateAlbumRequest;
use App\Repository\AlbumRepository as Album;
use App\Repository\UserRepository as User;

use Session;

/**
 * Class AlbumController
 * @package App\Http\Controllers
 */
class AlbumController extends Controller
{

    protected $album;

    /**
     * @var int
     */
    private $count;

    /*
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->count = 10;
    }


    /**
     * @param Album $album
     * @return \Illuminate\View\View
     */
    public function index(Album $album)
    {
        $albums=$album->all();
        return view('admin.albums.index',compact('albums'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(User $user)
    {
       // $user=$user->lists('name','id');
        return view('admin.albums.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateAlbumRequest $request
     * @return Response
     */
    public function store(CreateAlbumRequest $request,Album $album)
    {

        $uploaded_file = $request->file('image_file');      

        $parameter = $request->all();
        unset($parameter['image_file']);
        $album = $album->create($parameter);

        if(isset($uploaded_file)){

        $ext = $uploaded_file->getClientOriginalExtension();
       
        $imageName = $album->id . "." . $ext;


        $uploaded_file->move(
            base_path() . '/public/img/uploads/album/', $imageName
        );

        Image::make(base_path() . '/public/img/uploads/album/' . $imageName, array(
            'width' => 160 ,
            'height' => 200,
        ))->save(base_path() . '/public/img/uploads/thumbnails/album/' . $imageName);


        $album->update(array('image' => $imageName));
    }
        Session::flash('message', 'The Album was successfully added!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('albums');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, Album $album)
    {
        return view('pages.photos')->with('photos', $album->find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, User $user, Album $album)
    {

        return view('admin.albums.edit')->with('album', $album->find($id))->with('users', $user->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, CreateAlbumRequest $request, Album $album)
    {
        $album->find($id)->update($request->all());
        Session::flash('message', 'The Album was successfully Updated!.');
        Session::flash('flash_type', 'alert-success');
        return redirect('albums');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @return mixed
     */
    public function getAllAlbum()
    {
        return $this->album->all();
    }
}

