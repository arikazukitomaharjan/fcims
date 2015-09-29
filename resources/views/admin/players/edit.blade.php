@extends('adminMaster')
@section('breadcrumb')

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Players</a>
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
                <div class="panel-heading"><center><b>Update Player</b></center></div>

                    <div class="panel-body">
                          {!! Form::model($player,['method' => 'PATCH','route'=>['players.update',$player->id],'file'=>true]) !!}

                           <fieldset>
                           
                               <div class="col-md-6">
                                     <div class="form-group">
                                         <label><b>PLAYER NAME</b></label>
                                         {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                     </div>
                                     <div class="form-group">
                                         <label><b>DOB</b></label>
                                         {!! Form::text('DOB',null,array('class'=>'form-control dropdate','id'=>'calender')) !!}
                                          <img src="{{ url('public/img/images2/cal.gif')}}" onclick="javascript:NewCssCal('calender')" style="cursor:pointer"/>
                                   
                                    </div>
                                     <div class="form-group">
                                         <label><b>PERMANENT ADDRESS</b></label>
                                         {!! Form::text('permanent_address',null,array('class'=>'form-control')) !!}

                                     </div>
                                     <div class="form-group">
                                          <label><b>TEMPORARY ADDRESS</b></label>
                                          {!! Form::text('temporary_address',null,array('class'=>'form-control')) !!}

                                     </div>

                                    <div class="form-group">
                                         <label><b>BLOOD GROUP</b></label>
                                         {!! Form::text('blood_group',null,array('class'=>'form-control')) !!}

                                    </div>
                                   <div class="form-group">
                                        <label><b>IMAGE</b></label>
                                        {!! Form::file('image_upload',null,array('class'=>'form-control','id'=>'file_uploader')) !!}
                                        {!! Form::text('image',null,array('class'=>'form-control','id'=> 'file-name','disabled'=>"disabled")) !!}
                                    </div>
                                    
                                </div>
                                  <div claSS="col-md-6 pull-right">
                                   <div class="form-group">
                                        <label><b>HEIGHT</b></label>
                                        {!! Form::text('height',null,array('class'=>'form-control'))!!}
                                    </div>
                                    <div class="form-group">
                                        <label><b>WEIGHT</b></label>
                                        {!! Form::text('weight',null,array('class'=>'form-control'))!!}
                                    </div>
                                    <div class="form-group">
                                        <label><b>COMPLEXION</b></label>
                                        {!! Form::text('complexion',null,array('class'=>'form-control'))!!}
                                    </div>
                                    
                                    <div class="form-group">
                                     <label><b>CONTACT (home)</b></label>
                                     {!! Form::text('contact_home',null,array('class'=>'form-control','placeholder'=>'Home')) !!}
                                    </div>
                                    
                                     <div class="form-group">
                                     <label><b>CONTACT  (mobile)</b></label>
                                     {!! Form::text('contact_mobile',null,array('class'=>'form-control','placeholder'=>'mobile')) !!}
                                    </div>
                                     <div class="form-group">
                                     <label><b>HEALTH STATUS</b></label>
                                     {!! Form::text('health_status',null,array('class'=>'form-control')) !!}
                                    </div>
                                </div>
                                <center>{!! form::submit('Update',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

