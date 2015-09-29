<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateSliderRequest;
use App\Repository\SliderRepository as Slider;
use Illuminate\Http\Request;
use Folklore\Image\Facades\Image;


use Session;
class SliderController extends Controller {
    private $count;
    function __construct()
    {
        $this->count = 10;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Slider $slider)
    {
    

        return view('admin.sliders.index')->with('sliders',$slider->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param Slider $slider
     * @param CreateSliderRequest $request
     * @return Response
     */
    public function store(Slider $slider,CreateSliderRequest $request)
    {
        $ext = $request->file('image')->getClientOriginalExtension();

        $slider = $slider->create($request->all());

        $imageName = $slider->id . "." . $ext;

        $request->file('image')->move(
            base_path() . '/public/img/uploads/slider/', $imageName
        );

        Image::make(base_path() .'/public/img/uploads/slider/' . $imageName, array(
            'width' => 774,
            'height' => 329,
        ))->save(base_path() .'/public/img/uploads/slider/'.$imageName);

        $slider->update(array('image' => $imageName));
        
        Session::flash('message', 'The photo was successfully added!.');
        Session::flash('flash_type', 'alert-success');

        return redirect('sliders');

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
    public function edit($id,Slider $slider)
    {
        return view('admin.sliders.edit')->with('slider', $slider->find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Slider $slider,CreateSliderRequest $request)
    {
        $slider_to_update = $slider->find($id);
        $uploaded_image = $request->file('image_upload');


        if(isset($uploaded_image)){

            $ext = $uploaded_image->getClientOriginalExtension();
            $newImageName = $slider_to_update->id . "." . $ext;

           

            Image::make(base_path() .'/public/img/uploads/slider/' . $newImageName, array(
                'width' => 774,
                'height' => 329,
            ))->save(base_path() .'/public/img/uploads/slider/'.$newImageName);
            $parameter = $request->all();
            $parameter['image' ] = $newImageName;

               /* remove this field from the parameters list */
            unset($parameter['image_upload']);

            $slider_to_update->update($parameter);

         

        }else{

            $slider_to_update->update($request->all());
                
            
        }




        Session::flash('message', 'The content was successfully updated!.');
        Session::flash('flash_type', 'alert-success');


        return redirect('sliders');
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