 @extends('master')
 @section('content')
        {{--slider section--}} 
        <!-- Section Title -->   
               
            <section class="section-title img-gallery">
                <div class="overlay-bg"></div>
                <div class="container">
                    <h1>News</h1>
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
                            <li><a href="{{ url('articleDetail') }}">News</a></li>
                                                                 
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
                        <h3>{!! $news->title !!}   </h3>
                        <small>{!! $news->date_created !!} </small>
                    </div>
                    <!-- End Nav Filters -->
                    
                    <!-- Items Gallery filters-->
        
                     <!-- Items Gallery filters-->
                    <div class="portfolioplayerContainer">
                        
                        <ul>
                        <div class="row">
                            <div class="col-md-12">                       
                           
                                
                                        <!-- Item Player -->  
                               <a href="{!! url('public/img/uploads/article/'.$news->image) !!}"> <img class="img-responsive" src="{!! url('public/img/uploads/article/'.$news->image) !!}" ></a>
                                 
                                        
                               <br>

                                       
                     
   
                                          {!! $news->description !!}
                                    
                                      
                            </div>            
                                        <!-- End Player post -->

                        </div>
                        </ul>
                      
                    </div>
                <!-- /.panel-body -->
                                        
                                       
                          
                                    <!-- End Item Players-->  
                </div>
                                <!-- Tab Two - Players Staff -->
           
                
 
<br><br>
                       

      
  @stop

