@extends('adminMaster')

@section('breadcrumb')
  

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Album</a>
        </li>
    </ul>
@stop
@section('adminContent')
     <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        
                    <a href="{{ url('albums/create') }}"><i class="glyphicon glyphicon-plus-sign"></i> <h4 class="pull-right"></h4></a>
                

        <div class="box-icon">

            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">

     <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
     <thead>
            <th> TITLE</th>
            <th> DESCRIPTION</th>
            <th> DATE CREATED</th>
           
            <th> ACTIONS</th>
            </thead>

            <tbody>

            @foreach($albums as $album)
                <tr>
                    <td><a href="{!! url('photo-album/' . $album->id) !!}">{!! $album->title !!}</a></td>
                    <td>{!! $album->description !!}</td>
                    <td>{!! $album->date_created !!}</td>
                        
                    <td>{!! link_to_route('albums.edit', '', array($album->id),array('class' => 'glyphicon glyphicon-edit')) !!}</td>
                     </tr>
            @endforeach
               
            </tbody>
    </table>
    </div>
    </div>
    </div>
  

                      
                 


@stop



