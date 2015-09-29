@extends('adminMaster')

@section('breadcrumb')
  

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Article</a>
        </li>
    </ul>
@stop
@section('adminContent')
     <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        
                    <a href="{{ url('events/create') }}"><i class="glyphicon glyphicon-plus-sign"></i> <h4 class="pull-right"></h4></a>
                

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
    <tr> <th> HOME CLUB </th>
            <th> GOAL</th>
            <th> AWAY CLUB</th>
            <th> GOAL</th>
            <th> CHAMPIONSHIP</th>
            <th> TIME</th>
            <th> ACTIONS</th>
    </tr>
    </thead>
    <tbody>
     @foreach($events as $event)
                <tr>
                    <td>{!! $event->homeclub->name !!}</td>
                    <td>{!! $event->home_goal !!}</td>
                    <td>{!! $event->awayclub->name !!}</td>
                    <td>{!! $event->away_goal !!}</td>
                     <td>{!! $event->championship->championship_name !!}</td>
                    <td>{!! $event->time !!}</td>
                    <td>{!! link_to_route('events.edit', '', array($event->id), array('class' => 'glyphicon glyphicon-edit')) !!}
                    </td>
                    @endforeach
                </tr>
    
   
   
    
   
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
  

                      
                 


@stop

