@extends('adminMaster')

@section('breadcrumb')
  

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Player History</a>
        </li>
    </ul>
@stop
@section('adminContent')
     <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        
                    <a href="{{ url('playerhistories/create') }}"><i class="glyphicon glyphicon-plus-sign"></i> <h4 class="pull-right"></h4></a>
                

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
            <th >PLAYER</th>
            <th >CLUB</th>
            <th >SALARY</th>
             <th >POSITION</th>
            <th >TROPHY WON</th>
            <th >TOTAL GOAL</th>
             <th >ACTION</th>
                                 
    </tr>
    </thead>
    <tbody>
    @foreach($playerhistories as $playerhistories)
                                  <tr>
                                <td>{!!$playerhistories->player->name !!}</td>                            
                                <td>{!!$playerhistories->preclub->name !!}</td>   
                                <td>{!!$playerhistories->new_salary!!}</td>     
                                <td>{!!$playerhistories-> position!!}</td>      
                                <td>{!!$playerhistories-> won_trophies!!}</td>   
                                <td>{!!$playerhistories-> goal!!}</td>                           
                                <td>{!! link_to_route('playerhistories.edit', '', array($playerhistories->id),array('class' => 'glyphicon glyphicon-edit')) !!}</td>
                               
                            
                                </tr>
                                @endforeach
   
   
    
   
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
  

                      
                 


@stop

