@extends('adminMaster')

@section('breadcrumb')
  

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Club</a>
        </li>
    </ul>
@stop
@section('adminContent')
     <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        
                    <a href="{{ url('clubs/create') }}"><i class="glyphicon glyphicon-plus-sign"></i> <h4 class="pull-right"></h4></a>
                

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
             					<th >NAME</th>
                                <th >ESTABLISH</th>
                                                             
                                  
	                          <th >CEO</th>
	                          <th>LOCATION</th>
	                          <th >CONTACT</th>                                 
	                          <th >EMAIL</th>
	                          
	                           <th >WEBSITE</th>
                               <th >ACTION</th>
                          
	</tr>
    </thead>
    <tbody>   
    
          @foreach($club as $club)
                                  <tr>
                                <td>{!!$club->id !!}</td>
                                <td>{!!$club->name !!}</td>
                                <td>{!!$club->est_date !!}</td>
                                <td>{!!$club->CEO!!}</td>
                                <td>{!!$club->tole !!}</td>
                                <td>{!!$club->contact_no !!}</td>
                                <td>{!!$club->email_id !!}</td>
                                <td>{!!$club->website !!}</td>
                               <td>{!! link_to_route('clubs.edit', '', array($club->id),array('class' => 'glyphicon glyphicon-edit')) !!}</td>
                               
                                
                                </tr>
                                @endforeach
    
    </tbody>
    </table>
    </div>
    </div>
    </div>
                    
                 


@stop

