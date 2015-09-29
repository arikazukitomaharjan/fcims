 @extends('master')
 @section('content')
  		{{--slider section--}} 
  		<!-- Section Title -->           
            <section class="section-title img-gallery">
                <div class="overlay-bg"></div>
                <div class="container">
                    <h1>Players</h1>
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
                            <li><a href="{{ url('') }}">Photo</a></li>
                                                                 
                        </ul>
                    </div>        
                </div>

                <div class="semiboxshadow text-center">
                    <img src="{!! url('public/img/img-theme/shp.png') !!}" class="img-responsive" alt="">
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
                                        {!! Form::text('search_text',null,array('class'=>'form-control', 'placeholder' => 'Search player')) !!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                
                            {!! form::submit('Search Player',[' class'=>'btn btn-primary form-control'])!!}
                                

                            {!! Form::close() !!}
                            </div>
                           
                             <div class="col-md-2">
                            {!! Form::open(array('method' => 'Get','url' => 'playerDetailListView')) !!}
                             {!! form::submit('List View',[' class'=>'form-control'])!!} 
                            {!! Form::close() !!}
                             </div>
                              </div>
                        
                    </div>

                    <!-- End Nav Filters -->
					
                    <!-- Items Gallery filters-->
        
                     <!-- Items Gallery filters-->
                    <div class="portfoliophotoContainer">
                        <ul>
                            @foreach($photos as $photo)
                            <div class="col-md-3 soccer">
                            
                                <div class="img-hover">
                                    
                                     <!-- Item Player --> 
                                            <a class="example-image-link" href="{!! url('public/img/uploads/images/' . $photo->image) !!}" data-lightbox="example-set" data-title="{!! $photo->title !!}">
                                            <li class="item-player">
                                              <img class="img-responsive" src="{!! url('public/img/uploads/images/' . $photo->image) !!}" style="height: 250px; width: 260px;">
                                          
                                              
                                            
                                                <div class="info-player">
                                                    
                                                    <div class="overlay-player">
                                                       <h4 style="color:white;"> {!! $photo->title !!}</h4>
                                                      <h5>{!! $photo->description !!}</h5>
                                                    </div>
                                                </div>
                                           </li>
                                            
                                            </a>
                                          <!-- Item Player --> 
                                           
                                       
                                            <!-- End Player post -->
                                       
                                </div>   
                            </div>
                            @endforeach
                        <!-- End Items Gallery filters-->       
                        </ul>

                    </div>
                <!-- End Content Central -->



                       
</div>     
 <br><br>
        {{--end of slider section--}}
  @stop

