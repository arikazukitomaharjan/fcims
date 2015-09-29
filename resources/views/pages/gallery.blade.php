 @extends('master')
 @section('slider')
  		{{--slider section--}} 
  		<!-- Section Title -->           
            <section class="section-title img-gallery">
                <div class="overlay-bg"></div>
                <div class="container">
                    <h1>Gallery</h1>
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
                            <li><a href="{{ url('galleries') }}">Gallery</a></li>
                                                                 
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
                                        {!! Form::text('search_text',null,array('class'=>'form-control', 'placeholder' => 'Search player')) !!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                
                            {!! form::submit('Search Player',[' class'=>'btn btn-primary form-control'])!!}
                                

                            {!! Form::close() !!}
                            </div>
                           
                             <div class="col-md-2">
                            {!! Form::open(array('method' => 'Get','url' => 'galleryDetailListView')) !!}
                             {!! form::submit('List View',[' class'=>'form-control'])!!} 
                            {!! Form::close() !!}
                             </div>
                              </div>
                        
                    </div>

                    <!-- End Nav Filters -->
					
                    <!-- Items Gallery filters-->
        
                     <!-- Items Gallery filters-->
                    <div class="portfolioplayerContainer">
                        <ul>
                            @foreach($galleries as $gallery)
                            <div class="col-md-3 soccer">
                            
                                <div class="img-hover">
                                    
                                          <!-- Item Player --> 
                                           
                                            <li class="item-player">
                                              <img class="img-responsive" src="{!! url('public/img/uploads/album/'.$gallery->image) !!}" style="height: 250px; width: 260px;">
                                          
                                              
                                            
                                                <div class="info-player">
                                                    <h4> <a href="{!! url('photo-albumCollection/' . $gallery->id) !!}">{!! $gallery->title!!}</a></h4>
                                        
                                                    <div class="overlay-player">
                                                       <small> {!! $gallery->date_created!!}</small>
                                                       <br>
                                                        {!! $gallery->description!!}
                                                        
                                                    </div>
                                                </div>
                                           </li>
                                            
                                            </a>
                                            <!-- End Player post -->
                                       
                                </div>   
                            </div>
                            @endforeach
                        <!-- End Items Gallery filters-->       
                        </ul>

                    </div>
                <!-- End Content Central -->



                       
</div>     
 <div class="col-md-5"></div>
  <div class="pagination"> {!! $galleries->render() !!}</div>  
 <br><br>
        {{--end of slider section--}}
  @stop

