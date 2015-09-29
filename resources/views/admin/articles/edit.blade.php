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

        {!! Form::model($article,array('method' => 'PATCH','route'=>array('articles.update',$article->id))) !!}
        <fieldset>
           <div class="form-group">
                <label><b>TITLE</b></label>
                {!! Form::text('title',null,array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
                <label><b>DESCRIPTIOIN</b></label>
                {!! Form::textarea('description',null,array('class'=>'form-control','id'=>"ck")) !!}
            </div>
           
            
             <div class="col-md-6">
            <div class="form-group">
                <label><b>IMAGE</b></label>
                {!! Form::file('image_file',null,array('class'=>'form-control','id'=>'file_uploader')) !!}
                {!! Form::text('image',null,array('class'=>'form-control','id'=> 'file-name')) !!}
            </div>
            <div class="form-group">
                 <label><b>DATE CREATED</b></label>
                 {!! Form::text('date_created',null,array('class'=>'form-control date-picker','id'=>'calender')) !!}
                  <img src="{{ url('img/images2/cal.gif')}}" onclick="javascript:NewCssCal('calender')" style="cursor:pointer"/>
                 
             </div>
            </div>
             <div class="col-md-6">
            <div class="form-group">
                <label><b>TYPE</b></label>
                {!! Form::select('type', ['News'=>'News','Event'=>'Event']) !!}
            </div>
            <div class="form-group">
                <label><b>STATUS</b></label>
                {!! Form::select('status', ['Draft'=>'Draft','Published'=>'Published']) !!}
            </div>
            <div>
                <label><b>USER</b></label>
                <select class="form-control" name="user_id">
                          @foreach($user as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                          @endforeach
                </select>
            </div>
           
             </div>
            <center>{!! form::submit('Update Article',[' class'=>'btn btn-primary form-control'])!!}</center>

        </fieldset>
        {!! Form::close()!!}

    </div>
    </div>

    </div>
    </div>
    </div><!-- /col-lg-9 END SECTION MIDDLE -->
        <script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'ck' );
    </script>
@stop

