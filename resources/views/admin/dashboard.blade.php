@extends('adminMaster')
@section('breadcrumb')

    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
@stop
@section('adminContent')
	<div class=" row">
        <div class="col-md-3 col-sm-3 col-xs-6">
            <a data-toggle="tooltip" title="Players" class="well top-block" href="{!!url('playerhistories')!!}">
                <i class="glyphicon glyphicon-user yellow"></i>

                <div>Total Players</div>
                <div>{!!$player!!}</div>
                
            </a>
        </div>
   

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Club." class="well top-block" href="{!!url('clubhistories')!!}">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Total Club</div>
            <div>{!!$club!!}</div>
            
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Coach" class="well top-block" href="{!!url('coach')!!}">
            <i class="glyphicon glyphicon-eye-open  red"></i>

            <div>Total coach</div>
            <div>{!!$coach!!}</div>
           
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="Champions league" class="well top-block" href="{!!url('championship')!!}">
            <i class="glyphicon glyphicon-flag"></i>

            <div>Total Championship league</div>
            <div>{!!$championship!!}</div>
            
        </a>
    </div>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Introduction</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-7 col-md-12">
                    <h1>Foootball club Information management system <br>
                        <small>project</small>
                    </h1>
                    <p></p>

                    <p><b>.</b></p>

                   
                </div>
               

                <div class="col-lg-5 col-md-12 visible-xs center-text">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- Charisma Demo 5 -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:250px;height:250px"
                         data-ad-client="ca-pub-5108790028230107"
                         data-ad-slot="8957582309"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <!-- Ads end -->

            </div>
        </div>
    </div>
</div>
@stop