@extends('adminMaster')

@section('breadcrumb')
  

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Coach</a>
        </li>
    </ul>
@stop
@section('adminContent')
     <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        
                    <a href="{{ url('coachhistories/create') }}"><i class="glyphicon glyphicon-plus-sign"></i> <h4 class="pull-right"></h4></a>
                

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
                                  <th > ID</th>
                                  <th > NAME</th>
                                  <th >CLUB</th>

                                  
                                  <th >STATUS</th>
                                  <th>START DATE</th>
                                <th >END DATE</th>

                                   <th> ACTION</th>
    </tr>
    </thead>
    <tbody>
   

                                @foreach($coach as $coach)
                                  <tr>
                                <td>{!!$coach->id !!}</td>
                                <td>{!!$coach->coach->name !!}</td>
                                <td>{!!$coach->club->name !!}</td>

                                <td>{!!$coach->status !!}</td>
                                <td>{!!$coach->date_start !!}</td>
                                <td>{!!$coach->date_end !!}</td>





                                <td>{!! link_to_route('coachhistories.edit', '', array($coach->id),array('class' => 'glyphicon glyphicon-edit')) !!}</td>


                                </tr>
                                @endforeach

    
   
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
  

                      
                 


@stop

