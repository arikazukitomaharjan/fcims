@extends('adminMaster')

@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Slider</a>
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
                <div class="panel-heading"><center><b>Add Slider</b></center></div>

                    <div class="panel-body">
                            {!! Form::open(['route'=>'photos.store','files' => true])!!}
                            <fieldset>
                               
                                <div class = "col-md-6">
                                    <div class="form-group">
                                        <label><b>TITLE</b></label>
                                        {!! Form::text('title',null,array('class'=>'form-control')) !!}
                                    </div>

                                    <div class="form-group">
                                        <label><b>DESCRIPTIOIN</b></label>
                                        {!! Form::textarea('description',null,array('class'=>'form-control')) !!}
                                    </div>
                                    
                                </div>
                                <div class = "col-md-6">
                                    <div class="form-group">
                                        <label><b>IMAGE</b></label>
                                        {!! Form::file('image',null,array('class'=>'form-control')) !!}
                                    </div>

                                 <div class="form-group">
                                     <label><b>DATE CREATED</b></label>
                                     {!! Form::text('date_created',null,array('class'=>'form-control date-picker','id'=>'calender')) !!}
                                      <img src="{{ url('public/img/images2/cal.gif')}}" onclick="javascript:NewCssCal('calender')" style="cursor:pointer"/>
                                     
                                 </div>

                                    <div class="form-group">
                                        <label><b> STATUS </b></label>
                                        {!! Form::select('status', ['Draft', 'Published']) !!}
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label><b>ALBUM</b></label>
                                        <select class="form-control" name="album_id">
                                            @foreach($albums as $album)
                                                <option value="{{$album->id}}">{{$album->title}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <br><br>
                                <center>{!! form::submit('Add Photo',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

