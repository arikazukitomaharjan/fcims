@extends('adminMaster')
@section('breadcrumb')

            
<ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Club</a>
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
                <div class="panel-heading"><center><b>Edit Club</b></center></div>

                    <div class="panel-body">
                            {!! Form::model($club,array('method' => 'PATCH','route'=>array('clubs.update',$club->id))) !!}
 <fieldset>
                                <div class="col-md-6">
                                 <div class="form-group">
                                     <label><b>NAME</b></label>
                                     {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                 </div>
                                  <div class="form-group">
                                         <label><b>Establish Date </b></label>
                                         {!! Form::text('est_date',null,array('class'=>'form-control dropdate','id'=>'calender')) !!}
                                          <img src="{{ url('public/img/images2/cal.gif')}}" onclick="javascript:NewCssCal('calender')" style="cursor:pointer"/>
                                   
                                    </div>
                                 <div class="form-group">
                                     <label><b>CEO</b></label>
                                     {!! Form::text('CEO',null,array('class'=>'form-control')) !!}

                                 </div>
                                 <div class="form-group">
                                     <label><b>CONTACT</b></label>
                                     {!! Form::text('contact_no',null,array('class'=>'form-control')) !!}

                                </div>
                               <div class="form-group">
                                    <label><b>EMAIL</b></label>
                                    {!! Form::text('email_id',null,array('class'=>'form-control'))!!}
                                </div>
                                <div class="form-group">
                                    <label><b>WEBSITE</b></label>   
                                    {!! Form::text('website',null,array('class'=>'form-control'))!!}
                                </div>
                               <div class="form-group">
                                    <label><b>IMAGE</b></label>
                                    {!! Form::file('image_file',null,array('class'=>'form-control','id'=>'file_uploader')) !!}
                                    {!! Form::text('image',null,array('class'=>'form-control','id'=> 'file-name','disabled'=>"disabled")) !!}
                                </div>
                               
                                 
</div>
 <div class="col-md-6">
  <div class="form-group">
                                     <label><b>COUNTRY </b></label>
                                     {!! Form::text('country',null,array('class'=>'form-control','id'=>'datepicker')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>DEVELOPMENT REGION</b></label>
                                     {!! Form::text('development_region',null,array('class'=>'form-control')) !!}

                                 </div>
                                  <div class="form-group">
                                     <label><b>ZONE</b></label>
                                     {!! Form::text('zone',null,array('class'=>'form-control','id'=>'datepicker')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>DISTRICT</b></label>
                                     {!! Form::text('district',null,array('class'=>'form-control')) !!}

                                 </div>
                                  <div class="form-group">
                                     <label><b>MUNICIPALITY </b></label>
                                     {!! Form::text('municipality',null,array('class'=>'form-control','id'=>'datepicker')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>WARD NO.</b></label>
                                     {!! Form::text('ward_no',null,array('class'=>'form-control')) !!}

                                 </div>
                                  <div class="form-group">
                                     <label><b>TOLE</b></label>
                                     {!! Form::text('tole',null,array('class'=>'form-control')) !!}

                                 </div>

                                </div>
                                <br><br>
                                <center>{!! form::submit('Update Club',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

