
  @extends('master')
  @section('slider')                               
  		{{--slider section--}}  
            @include('/include/slider')  
        {{--end of slider section--}}
  @stop
   @section('tab')
  		{{--tab section--}}  
            @include('/include/tab')  
        {{--end of tab section--}}
  @stop
   @section('content-left')
  		{{--tab section--}}  
            @include('/include/content-left')  
        {{--end of tab section--}}
  @stop
    @section('content-right')
  		{{--tab section--}}  
            @include('/include/content-right')  
        {{--end of tab section--}}
  @stop


