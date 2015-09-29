@extends('adminMaster')

@section('breadcrumb')

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Player</a>
        </li>
    </ul>
@stop
@section('adminContent')
     <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        
                    <a href="{{ url('players/create') }}"><i class="glyphicon glyphicon-plus-sign"></i> <h4 class="pull-right"></h4></a>
                

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
                                   <th >ID</th>
                                  <th >Player Name</th>
                                  <th >DOB</th>
                                  <th >P. Address</th>                         
                                  
                                  <th >Height</th>
                                  <th>Weight</th>
                                  <th >Complexion</th>                                 
                                 <th >Contact</th>
                                   <th >Action</th>
    </tr>
    </thead>
    <tbody>   
       @foreach($players as $player)
                                  <tr>
                                   <td>{!!$player->id !!}</td>
                                <td>{!!$player->name !!}</td>
                                <td>{!!$player->DOB !!}</td>
                                <td>{!!$player->permanent_address!!}</td>
                                <td>{!!$player->height !!} ft</td>
                                <td>{!!$player->weight !!} kg</td>
                                <td>{!!$player->complexion !!}</td>
                               <td>{!!$player->contact_mobile !!}</td>
                                <td>{!! link_to_route('players.edit', '', array($player->id),array('class' => 'glyphicon glyphicon-edit')) !!}</td>
                              
                                
                                </tr>
                                @endforeach
    
                          
   
     </tbody>
    </table>
    </div>
    </div>
    </div>
                    
                 


@stop
@section('js_code')

@stop


