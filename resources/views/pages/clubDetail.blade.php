 @extends('master')
 @section('content')
  		{{--slider section--}} 
  		<!-- Section Title -->           
            <section class="section-title img-gallery">
                <div class="overlay-bg"></div>
                <div class="container">
                    <h1>CLub</h1>
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
                            <li><a href="{{ url('clubDetail') }}">Club Detail</a></li>
                                                                 
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
                                    {!! Form::text('search_text',null,array('class'=>'form-control', 'placeholder' => 'Search club')) !!}
                                </div>
                            </div>
                            <div class="col-md-2">
                            
                        {!! form::submit('Search Club',[' class'=>'btn btn-primary form-control'])!!}
                            </div>

                        {!! Form::close() !!}
                        </div>
                    </div>
                    <!-- End Nav Filters -->
					
                    <!-- Items Gallery filters-->

                     <!-- Items Gallery filters-->
                    <div class="portfolioclubContainer">

                     <div class="panel-box">
                        <div class="titles">
                            <h4>CLUB TEAM</h4>
                        </div>
                        <!-- Item club -->
                        <div class="row clubs-teams">
                            <!-- Item clubs -->
                            @foreach($clubs as $club)
                            <div class="col-sx-12 col-sm-6 col-md-4">
                                <div class="item-clubs">
                                    <div class="img-clubs">
                                         <img class="img-responsive" src="{!! url('public/img/uploads/thumbnails/club/'.$club->club->image) !!}"  >
                                    </div>
                                    <div class="info-clubs">
                                         <h4> <a href="{!! url('clubhistories/' . $club->id) !!}">{!! $club->club->name!!}</a></h4>
                                         <p class="style= color:blue;">{!! $club->club->contact_no!!}</p>
                                         <a href="{!! url('http://'.$club->club->website) !!}"><p class="style= color:blue;">{!! $club->club->website!!}</p>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                        <!-- End Item club -->
                    </div>


                       
                    </div>
                <!-- End Content Central -->



                       
            </div>
 <div class="col-md-5"></div>
  <div class="pagination"> {!! $clubs->render() !!}</div>

  <br><br>
        {{--end of slider section--}}
  @stop

