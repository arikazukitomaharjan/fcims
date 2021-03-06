@extends('adminMaster')

@section('breadcrumb')

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Players History</a>
        </li>
        <li>
            <a href="#">Edit</a>
        </li>
    </ul>
@stop
@section('adminContent')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b>Edit Player History</b></center></div>

                    <div class="panel-body">
                         {!! Form::model($playerhistories,array('method' => 'PATCH','route'=>array('playerhistories.update',$playerhistories->id))) !!}
                        <fieldset>
                               
                              <div class = "col-md-6">
                                    <div>
                                        
                                        <label><b>PLAYER</b></label>
                                        {!! Form::select('player_id',$players,null,array('class'=>'form-control')) !!}
                                          
                                    </div>                                  
                                       

                                
                                    
                                      
                                        <div>
                                            <label><b>STATUS</b></label>
                                            {!! Form::text('status',null,array('class'=>'form-control'))!!}

                                        </div>
                                        <br>
                                          <div>
                                            <label><b>POSTION</b></label>
                                             {!! Form::select('position', ['Goalkeeper'=>'Goalkeeper','Defender'=>'Defender','Centre-back'=>'Centre-back','Sweeper'=>'Sweeper',' Full-back'=>' Full-back','Wing-back'=>'Wing-back','Midfielder'=>'Midfielder','Centre midfield'=>'Centre midfield','Defensive midfield'=>'Defensive midfield','Attacking midfield'=>'Attacking midfield',' Wide midfield'=>' Wide midfield','Forward'=>'Forward',' Centre forward'=>' Centre forward','Second striker'=>'Second striker']) !!}

                                        </div>
                                          </div>
                                <div class = "col-md-6">
                                    <div>
                                        <label><b>TROPHIES</b></label>
                                        {!! Form::text('won_trophies',null,array('class'=>'form-control'))!!}

                                    </div>
                                
                               
                                    <div>
                                        <label><b>GOAL COUNT</b></label>
                                        {!! Form::text('goal',null,array('class'=>'form-control'))!!}

                                    </div>
                                     <div>
                                        <label><b>DATE RANGE</b></label>
                                        {!! Form::text('date_range',null,array('class'=>'form-control'))!!}

                                    </div>
                              
                                </div>
                            <div class = "col-md-12">
                                <div class="panel-body">
                                     <div class="tab-content">
                                         <ul class="nav nav-tabs">
                                        
                                            <li class="active"><a href="#tab2primary" data-toggle="tab"> CURRNT CLUB</a></li>
                                                <li ><a href="#tab1primary" data-toggle="tab">PREVIOUS CLUB</a></li>
                                            
                                         </ul>
                                          <div class="tab-pane fade in active" id="tab1primary">
                                            <ul>
                                                                         
                                            <label>PREVIOUS CLUB</label>
                                            {!! Form::select('previous_club_id',$club,null,array('class'=>'form-control')) !!}
                                      
                                                  </ul>
                                        </div>
                                        <div class="tab-pane fade" id="tab2primary">
                                            <ul>
                                           <label>CURRENT  CLUB</label>
                                            {!! Form::select('current_club_id',$club,null,array('class'=>'form-control')) !!}
                                      
                                            </ul>

                                        </div>
                                      </div>
                                  </div>
                               

                                <div class="panel-body">
                                     <div class="tab-content">
                                         <ul class="nav nav-tabs">
                                            <li class="active"><a href="#newsalary" data-toggle="tab"> SALARY</a></li>
                                            <li ><a href="#salary" data-toggle="tab">PREVIOUS SALARY</a></li>
                                         
                                            
                                         </ul>
                                          <div class="tab-pane fade in active" id="salary">
                                            <ul> <label><b>SALARY</b></label>
                                                    {!! Form::text('salary',null,array('class'=>'form-control'))!!}   </ul>
                                        </div>
                                        <div class="tab-pane fade" id="newsalary">
                                            <ul>
                                           `<label><b>NEW SALARY</b></label>
                                                {!! Form::text('new_salary',null,array('class'=>'form-control'))!!}

                                            </ul>

                                        </div>
                                      </div>
                                  </div>
                                <div>
                            </div>
                                <br><br>
                                <center>{!! form::submit('Update Player History',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

