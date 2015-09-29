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
                            {!! Form::open(['route'=>'sliders.store','files' => true])!!}
                            <fieldset>
                               
                                 <div class="form-group">
                     <label><b>TITLE</b></label>
                     {!! Form::text('title',null,array('class'=>'form-control')) !!}
                 </div>
                 <div class="form-group">
                     <label><b>DESCRIPTIOIN</b></label>
                     {!! Form::textarea('description',null,array('class'=>'form-control text-editor')) !!}
                 </div>
                <div class="form-group">
                    <label><b>STATUS</b></label>
                    {!! Form::select('status', ['Draft' => 'Draft', 'Published' => 'Published']) !!}
                </div>
                 <div class="form-group">
                     <label><b>IMAGE</b></label>
                     {!! Form::file('image',null,array('class'=>'form-control')) !!}
                 </div>
                 

                                <br><br>
                                <center>{!! form::submit('Add Slider',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

