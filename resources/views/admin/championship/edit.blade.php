@extends('adminMaster')


@section('adminContent')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b>Add Player</b></center></div>

                    <div class="panel-body">
                         {!! Form::model($championship,array('method' => 'PATCH','route'=>array('championship.update',$championship->id))) !!}
                        <fieldset>
                               
                                <fieldset>
                               
                                <div class="form-group">
                                     <label><b>CHAMPIONSHIP NAME</b></label>
                                     {!! Form::text('championship_name',null,array('class'=>'form-control')) !!}
                                 </div>
                                   <div class="form-group">
                                     <label><b>DATE</b></label>
                                     {!! Form::text('championship_held_date',null,array('class'=>'form-control dropdate','id'=>'calender')) !!}
                                      <img src="{{ url('public/img/images2/cal.gif')}}" onclick="javascript:NewCssCal('calender','yyyyMMdd','dropdown',true,'12',true)" style="cursor:pointer"/>
                                   
                                 </div                          
                                
                               
                                <br><br>
                                <center>{!! form::submit('Add Championship',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

