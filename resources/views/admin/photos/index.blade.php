@extends('adminMaster')

@section('breadcrumb')
  

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Photo</a>
        </li>
    </ul>
@stop
@section('adminContent')
     <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        
                    <a href="{{ url('photos/create') }}"><i class="glyphicon glyphicon-plus-sign"></i> <h4 class="pull-right"></h4></a>
                

        <div class="box-icon">

            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
     <ul class="thumbnails gallery">
     @foreach($photos as $photo)
     
            <li class="thumbnail">
                                <a title="{!! $photo->title !!}" href="{!! asset('img/uploads/images/' . $photo->image) !!}"><img
                                        class="grayscale" src="{!! url('img/uploads/thumbnails/photos/' . $photo->image) !!}"
                                         ></a>

                            </li>
           
                            
        @endforeach
        </ul>
    </div>
    </div>
    </div>
    </div>
  

                      
                 


@stop

