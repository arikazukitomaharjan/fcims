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
                            <li><a href="{{ url('articles') }}">News Detail</a></li>
                                                                 
                        </ul>
                    </div>        
                </div>

                <div class="semiboxshadow text-center">
                    <img src="public/img/img-theme/shp.png" class="img-responsive" alt="">
                </div>
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
                                        {!! Form::text('search_text',null,array('class'=>'form-control', 'placeholder' => 'Search News')) !!}
                                    </div>
                                </div>
                                <div class="col-md-2">
                                
                            {!! form::submit('Search News',[' class'=>'btn btn-primary form-control'])!!}
                                

                            {!! Form::close() !!}
                            </div>
                           
                            
                              </div>
                        
                    </div>


                <!-- Content Central -->
              <!-- Content Central -->
                <div class="container padding-top">
                    <div class="row">
                        <!-- content Column Left -->
                                           
                            
                            <div class="row">
                                <!-- blog post-->  
                              
                                @foreach($articles as $article)
                                    <div class="post-item">

                                    <div class="row">
                                    @if(isset($article->image))

                                        <div class="col-md-2">

                                            <div class="img-hover">
                                           
                                              <img class="img-responsive" src="{!! url('public/img/uploads/article/'.$article->image) !!}" >                                            
                                               
                                               <div class="overlay"><a href="{!! url('articles/'.$article->id) !!}">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h4><a href="{!! url('articles/'.$article->id) !!}">{!! $article->title!!}</a></h4>
                                            <p class="data-info">{!! $article->date_created!!}</p>
                                            <p>{!! substr($article->description,0,150)!!}
</p><a href="{!! url('articles/'.$article->id) !!}"> Read more ... </a>
                                        </div>
                                       
                                    @endif
                               
                                        

                                    
                                           
                                   
                                   </div>
                                </div>
                               

                                @endforeach
                                 <div class="pagination"> {!! $articles->render() !!}</div>

                                 <!-- End Post Item -->

                         
                                <!-- End blog post-->  
                            </div>
                            </div>
                          </div>
@stop