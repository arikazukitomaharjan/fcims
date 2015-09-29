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
                <div class="panel-heading"><center><b>Add Coach</b></center></div>

                    <div class="panel-body">
                            {!! Form::open(['route'=>'coachhistories.store','files'=>true])!!}
                            <fieldset>

                                 <div class="form-group">
                                    <label><b>NAME</b></label>
                                    {!! Form::select('coach_id',$coach,null,array('class'=>'form-control tag')) !!}

                                </div>
                                <div class="form-group">
                                    <label><b>CLUB</b></label>
                                    {!! Form::select('club_id',$club,null,array('class'=>'form-control tag')) !!}

                                </div>
                                 <div class="form-group">
                                     <label><b>STATUS</b></label>
                                     {!! Form::select('status', ['player'=>'player','coach'=>'coach','expire'=>'expire'])!!}
                                 </div>
                                 <div class="form-group">
                                    <label><b>START DATE</b></label>
                                    {!! Form::text('date_start',null,array('class'=>'form-control'))!!}

                                </div>
                                 <div class="form-group">
                                    <label><b>START DATE</b></label>
                                    {!! Form::text('date_end',null,array('class'=>'form-control'))!!}

                                </div>
                                <br><br>
                                <center>{!! form::submit('Add Coach',[' class'=>'btn btn-primary form-control'])!!}</center>

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
@stop

