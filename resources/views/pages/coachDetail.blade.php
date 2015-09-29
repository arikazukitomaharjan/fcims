 @extends('master')
 @section('slider')
        {{--slider section--}} 
        <!-- Section Title -->           
            <section class="section-title img-gallery">
                <div class="overlay-bg"></div>
                <div class="container">
                    <h1>Coach</h1>
                </div>
            </section>
            <!-- End Section Title --> 

            <!-- Section Area - Content Central -->
            <section class="content-info">

                <div class="crumbs">
                    <div class="container">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>/</li>
                            <li><a href="{{ url('coahDetail') }}">Coach Detail</a></li>
                                                                 
                        </ul>
                    </div>        
                </div>

                <div class="semiboxshadow text-center">
                    <img src="public/img/img-theme/shp.png" class="img-responsive" alt="">
                </div>

                <!-- Content Central -->
                <div class="container">
                    <!-- Nav Filters -->
                    <div class="portfolioFilter">
                         <br>
                     
                          <div class="row">
                         {!! Form::open(array('method' => 'Post', 'url' => 'posts/search')) !!}
                         <div class="col-md-3">
                         </div>
                           <div class="col-md-3">
                                 <div class="form-group">
                                    <label class="sr-only" for="search_text">Search Text</label>
                                    {!! Form::text('search_text',null,array('class'=>'form-control', 'placeholder' => 'Search coach')) !!}
                                </div>
                            </div>
                            <div class="col-md-2">
                            
                        {!! form::submit('Search Coach',[' class'=>'btn btn-primary form-control'])!!}
                            </div>

                        {!! Form::close() !!}
                        </div>
                    </div>
                    <!-- End Nav Filters -->
                    
                    <!-- Items Gallery filters-->
        
                     <!-- Items Gallery filters-->
                    <div class="portfoliocoachContainer">
                       <ul>
                       @foreach($coachs as $coach)

                           <div class="col-xs-6 col-sm-6 col-md-3 soccer">
                            <div class="img-hover">
                                
                                        <!-- Item Player -->  
                                       
                                        <li class="item-player">
                                                                                   <img class="img-responsive" src="{!! url('public/img/uploads/coach/'.$coach->coach->image) !!}" style="height: 250px; width: 260px;" >
                                        </a>
                                            <div class="info-player">
                                                <h4><a href="{!! url('coachhistories/' . $coach->id) !!}">{!! $coach->coach->name!!}</a></h4>
                                                <h5><span>{!! $coach->coach->address!!}</span></h5>
                                                <h5><span>{!! $coach->coach->work!!}</span></h5>
                                                <div class="overlay-player">
                                                    
                                                </div>
                                            </div>
                                        
                                        </li>
                                       
                                        <!-- End Player post -->

                                        
                                       </div>
                                   

                    <!-- End Items Gallery filters-->       
                </div>
                <!-- End Content Central -->@endforeach

                       
   </ul>
                       
                    </div>
                <!-- End Content Central -->



                       
</div>    
 
<br><br>
 
        {{--end of slider section--}}
  @stop

