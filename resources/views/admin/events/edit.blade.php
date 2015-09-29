@extends('adminMaster')

@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Article</a>
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
                <div class="panel-heading"><center><b>Edit Article</b></center></div>

                    <div class="panel-body">

        {!! Form::model($event,array('method' => 'PATCH','route'=>array('events.update',$event->id))) !!}
        <fieldset>
           <div class="form-group">
                                            
                    <label><b>HOME CLUB</b></label>
                    {!! Form::select('home_club_id',$club,array('class'=>'form-control')) !!}
                      
                </div>   
                <div class="form-group">
                    <label><b>HOME GOAL</b></label>
                    {!! Form::text('home_goal',null,array('class'=>'form-control')) !!}
                </div>
                
                
           
      
                <div class="form-group">
                    <label><b>AWAY CLUB</b></label>
                    {!! Form::select('away_club_id',$club,array('class'=>'form-control')) !!} </div>
               <div class="form-group">
                    <label><b>AWAY GOAL</b></label>
                    {!! Form::text('away_goal',null,array('class'=>'form-control','id'=>"text")) !!}
                </div>
                
                 <div class="form-group">
                    <label><b>CHAMPIONSHIP</b></label>
                    {!! Form::select('championship_id',$championship,array('class'=>'form-control')) !!}
                </div>
               <div class="form-group">


                <label><b>TIME</b></label>
                {!! Form::text('time',null,array('class'=>'form-control droptime','id'=>'calender')) !!}
                <img src="{{ url('img/images2/cal.gif')}}" onclick="javascript:NewCssCal('calender','yyyyMMdd','dropdown',true,'12',true)" style="cursor:pointer"/>
                                   
            </div>
           
           

            <center>{!! form::submit('Update Event',[' class'=>'btn btn-primary form-control'])!!}</center>

        </fieldset>
        {!! Form::close()!!}

    </div>
    </div>

    </div>
    </div>
    </div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

