@extends('adminMaster')

@section('breadcrumb')
  

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Club History</a>
        </li>
    </ul>
@stop
@section('adminContent')
     <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        
                    <a href="{{ url('clubhistories/create') }}"><i class="glyphicon glyphicon-plus-sign"></i> <h4 class="pull-right"></h4></a>
                

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
    <tr>
                <th >CLUB NAME</th>
                 <th >CHAMPIONSHIP</th>
                
                <th >GAME STATUS</th>   
                <th >ACTION</th>
    </tr>
    </thead>
    <tbody>
     @foreach($clubhistories as $clubhistories)
                                  <tr>
                                <td>{!!$clubhistories->club->name !!}</td>
                                <td>{!!$clubhistories->championship->championship_name !!}</td>
                                <td>{!!$clubhistories->game_result_status!!}</td>                                
                                <td>{!! link_to_route('clubhistories.edit', '', array($clubhistories->id),array('class' => 'glyphicon glyphicon-edit')) !!}</td>
                               
                                
                                </tr>
                                @endforeach
                          
   
   
    
   
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
  

                      
                 


@stop

