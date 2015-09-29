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
            <a href="#">Create</a>
        </li>
    </ul>
@stop
@section('adminContent')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b>Add Player History</b></center></div>

                    <div class="panel-body">
                            {!! Form::open(['route'=>'playerhistories.store'])!!}
                            <fieldset>
                                 
                                 <div class = "col-md-6">
                                   <div class="form-group">
                                        
                                        <label><b>PLAYER</b></label>
                                        {!! Form::select('player_id',$players,null,array('class'=>'form-control tag')) !!}
                                          
                                    </div>                                  
                                       

                                
                                    
                                      
                                        <div class="form-group">
                                            <label><b>STATUS</b></label>
                                            {!! Form::select('status', ['player'=>'player','coach'=>'coach','expire'=>'expire'])!!}

                                        </div>
                                      
                                          
                                        <div class="form-group">
                                        <label><b>DATE RANGE</b></label>
                                        {!! Form::text('date_range',null,array('class'=>'form-control'))!!}

                                    </div>
                                          </div>
                                <div class = "col-md-6">
                                   <div class="form-group">
                                            <label><b>POSTION</b></label>
                                             {!! Form::select('position', 
                                             [
                                             'Goalkeeper',
                                             'Defender'=>'Defender',
                                             'Centre-back'=>'Centre-back',
                                             'Sweeper'=>'Sweeper',
                                             ' Full-back'=>' Full-back',
                                             'Wing-back'=>'Wing-back',
                                             'Midfielder'=>'Midfielder',
                                             'Centre midfield'=>'Centre midfield',
                                             'Defensive midfield'=>'Defensive midfield',
                                             'Attacking midfield'=>'Attacking midfield',
                                             ' Wide midfield'=>' Wide midfield',
                                             'Forward'=>'Forward',
                                             ' Centre forward'=>' Centre forward',
                                             'Second striker'=>'Second striker'
                                             ],null,['class'=>'form-control tag ']) !!}

                                        </div>
                                       <div class="form-group">
                                        <label><b>TROPHIES</b></label>
                                        {!! Form::text('won_trophies',null,array('class'=>'form-control'))!!}

                                    </div>
                                
                               
                                     <div class="form-group">
                                        <label><b>GOAL COUNT</b></label>
                                        {!! Form::text('goal',null,array('class'=>'form-control'))!!}

                                    </div>
                                        
                              
                                </div>
                            <div class = "col-md-12">
                                <div class="panel-body">
                                     <div class="tab-content">
                                         <ul class="nav nav-tabs">
                                        
                                            <li class="active"><a href="#tab2primary" data-toggle="tab"> CURRNT CLUB</a></li>
                                                <li ><a href="#tab1primary" data-toggle="tab">PREVIOUS CLUB</a></li>
                                            
                                         </ul>
                                          <div class="tab-pane fade" id="tab2primary">
                                            <ul>
                                           <label>CURRENT  CLUB</label>
                                            {!! Form::select('current_club_id',$club,null,array('class'=>'form-control')) !!}
                                      
                                            </ul>

                                        </div>
                                          <div class="tab-pane fade in active" id="tab1primary">
                                            <ul>
                                                                         
                                            <label>PREVIOUS CLUB</label>
                                            {!! Form::select('previous_club_id',$club,null,array('class'=>'form-control')) !!}
                                      
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
                                          <div class="tab-pane fade" id="newsalary">
                                            <ul>
                                           `<label><b>NEW SALARY</b></label>
                                                {!! Form::text('new_salary',null,array('class'=>'form-control'))!!}

                                            </ul>

                                        </div>
                                          <div class="tab-pane fade in active" id="salary">
                                            <ul> <label><b>SALARY</b></label>
                                                    {!! Form::text('salary',null,array('class'=>'form-control'))!!}   </ul>
                                        </div>
                                       
                                      </div>
                                  </div>
                                <div>
                            </div>
                                <br><br>
                                <center>{!! form::submit('Add Player History',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

@section('js_code')
    <script>
       $(function(){
            
            $('.tag').select2({
                placeholder:'select ',
                 theme: "classic",
               
                
                 tokenSeparators: [',', ' ']
 
               
                
            });

        });
    </script>
   
<link href="{{asset('js/select/css/select2.min.css')}}" rel="stylesheet">
<link href="{{asset('js/select/css/select2.css')}}" rel="stylesheet">
<script src="{{ asset('js/select/js/select2.min.js') }}"></script>
<script src="{{ asset('js/select/js/select2.js') }}"></script>
@endsection