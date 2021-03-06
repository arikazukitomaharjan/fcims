@extends('adminMaster')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Club History</a>
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
                <div class="panel-heading"><center><b>Add Club History</b></center></div>

                    <div class="panel-body">
                           {!! Form::open(['route'=>'clubhistories.store','files' => true])!!}
                             <fieldset>
                                <div>
                                    <label><b>CLUB</b></label>
                                    <select class="form-control " name="club_id">
                                              @foreach($club as $club)
                                                <option value="{{$club->id}}">{{$club->name}}</option>
                                              @endforeach
                                    </select>
                                </div>
                                 
                                <div>
                                    <label><b>CHAMPIONSHIP</b></label>
                                    <select class="form-control tag" name="championship_id"  multiple="multiple">
                                              @foreach($championship as $championship)
                                                <option value="{{$championship->id}}">{{$championship->championship_name}}</option>
                                              @endforeach
                                    </select>
                                </div>
                                 <div class="form-group">
                                     <label><b>STATUS</b></label>
                                     {!! Form::text('game_result_status',null,array('class'=>'form-control')) !!}
                                 </div>
                                 <div class="form-group">
                                     <label><b>GOAL COUNT</b></label>
                                     {!! Form::text('goal_count',null,array('class'=>'form-control')) !!}
                                 </div>
                                <br><br>
                                <center>{!! form::submit('Add Club History',[' class'=>'btn btn-primary form-control'])!!}</center>

                            </fieldset>
                        {!! Form::close()!!}
                    </div>
                </div>

        </div>
    </div>
</div><!-- /col-lg-9 END SECTION MIDDLE -->
@stop

