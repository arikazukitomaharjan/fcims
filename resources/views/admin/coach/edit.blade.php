@extends('adminMaster')
@section('breadcrumb')

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Coach</a>
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
                <div class="panel-heading"><center><b>Update Coach</b></center></div>

                    <div class="panel-body">
                            {!! Form::model($coach,array('method' => 'PATCH','route'=>array('coach.update',$coach->id))) !!}
                            <fieldset>
                            
                               
                               
                               <div class="col-md-6">
                                 <div class="form-group">
                                     <label><b>NAME</b></label>
                                     {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>ADDRESS</b></label>
                                     {!! Form::text('address',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>CONTACT (home)</b></label>
                                     {!! Form::text('contact_home',null,array('class'=>'form-control','placeholder'=>'Home')) !!}
                                    </div>
                                    
                                     <div class="form-group">
                                     <label><b>CONTACT  (mobile)</b></label>
                                     {!! Form::text('contact_mobile',null,array('class'=>'form-control','placeholder'=>'mobile')) !!}
                                    </div>
                               
                            </div>
                                  <div claSS="col-md-6 pull-right">
                                <div class="form-group">
                                     <label><b>WORK</b></label>
                                     {!! Form::text('work',null,array('class'=>'form-control')) !!}

                                </div>
                                <div class="form-group">
                                      <label><b>EMAIL ID</b></label>
                                      {!! Form::text('email_id',null,array('class'=>'form-control')) !!}

                                 </div>
                                <div class="form-group">
                                    <label><b>IMAGE</b></label>
                                    {!! Form::file('image_file',null,array('class'=>'form-control','id'=>'file_uploader')) !!}
                                    {!! Form::text('image',null,array('class'=>'form-control','id'=> 'file-name','disabled'=>"disabled")) !!}
                                </div>
                            </div>
                                <br><br>
                                <center>{!! form::submit('Update Coach',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

