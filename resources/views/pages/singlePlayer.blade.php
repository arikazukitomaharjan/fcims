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
                            <li><a href="{{ url('playerDetail') }}">Player Detail</a></li>
                                                                 
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
                        <h2>{!!$players->player->name!!} </h2>
                    </div>
                    <!-- End Nav Filters -->
                    
                    <!-- Items Gallery filters-->
        
                     <!-- Items Gallery filters-->
                    <div class="portfolioplayerContainer">
                        
                        <ul>
                        <div class="row">
                            <div class="col-md-2">                       
                           
                                
                                        <!-- Item Player -->  
                                       
                                    
                                        
                                        <img class="img-circle" src="{!! url('public/img/uploads/thumbnails/player/'.$players->player->image) !!}" >
                                    
                            </div>
                            <div class="col-md-9">    

                                            <h4>{!!$players->player->name!!}</h4>
                                                 <h6>{!!$players->player->DOB!!}</h6>
                                                  <h4>{!!$players->player->permanent_address!!}</h4>
                                                  <h6>{!!$players->player->contact_mobile!!}</h6>
                                      
                            </div>            
                                        <!-- End Player post -->

                        </div>
                        </ul>
                        <br>
                        <br><br><br>
                         <div class="row">
                             <div class="col-md-6">

                                <!-- /.panel-heading -->
                                
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#basic" data-toggle="tab">Basic Information</a>
                                        </li>
                                        <li><a href="#game" data-toggle="tab">History</a>
                                        </li>
                                        <li><a href="#award" data-toggle="tab">Award History</a>
                                        </li>
                                        
                                    </ul>                
                                                                    
                   
                              
                             <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane in active" id="basic">
                                                 
                            <table class="table table-condensed table-striped">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>Fullname:</td>
                                        <td>{!!$players->player->name!!}</td>                                       
                                    </tr>
                                    <tr>
                                        <td>Date of Birth:</td>
                                        <td>{!!$players->player->DOB!!}</td>                                       
                                    </tr>
                                    <tr>
                                        <td>Permanent Address:</td>
                                        <td>{!!$players->player->permanent_address!!}</td>                                       
                                    </tr>
                                      <tr>
                                        <td>Temporary Address:</td>
                                        <td>{!!$players->player->temporary_address!!}</td>                                       
                                    </tr>
                                     <tr>
                                        <td>Height:</td>
                                        <td>{!!$players->player->height!!} ft</td>                                       
                                    </tr>
                                     <tr>
                                        <td>Weight:</td>
                                        <td>{!!$players->player->weight!!} kg</td>                                       
                                    </tr>
                                     <tr>
                                        <td>Blood Group:</td>
                                        <td>{!!$players->player->blood_group!!}</td>                                       
                                    </tr>
                                     <tr>
                                        <td>Complexion:</td>
                                        <td>{!!$players->player->complexion!!}</td>                                       
                                    </tr>
                                     <tr>
                                        <td>Contact (home):</td>
                                        <td>{!!$players->player->contact_home!!}</td>                                       
                                    </tr>
                                     <tr>
                                        <td>Contact (mobile):</td>
                                        <td>{!!$players->player->contact_mobile!!}</td>                                       
                                    </tr>
                                     <tr>
                                        <td>Heath Status:</td>
                                        <td>{!!$players->player->health_status!!}</td>                                       
                                    </tr>
                              
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="award">
                            <table class="table table-condensed table-striped">
                                <thead>
                                <tr>
                                    <th>Award</th>
                                    <th>Year</th>
                                </tr>
                                </thead>
                                <tbody>

                                     <tr>                                        
                                        <td>Best Player</td> 
                                        <td>2068</td>                                      
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                       
                        <div class="tab-pane fade" id="game">
                            <table class="table table-condensed table-striped">
                                <thead>
                                <tr>
                                    <th>Position</th>
                                    <th>Information</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                        <td>Previous Club:</td>
                                        <td>{!!$players->preclub->name!!}</td>                                       
                                    </tr>
                                      <tr>
                                        <td>Current Club:</td>
                                        <td>{!!$players->curclub->name!!}</td>                                       
                                    </tr>
                                     <tr>
                                        <td>Position:</td>
                                        <td>{!!$players->position!!}</td>                                       
                                    </tr>
                                    <tr>
                                        <td>Total Goal:</td>
                                        <td>{!!$players->player->goal!!}</td>                                       
                                    </tr>
                                  
                                </tbody>
                            </table>
                        </div>
                         

                        </div>
                    </div>
                </div>
                <!-- /.panel-body -->
                                        
                                       
                          
                                    <!-- End Item Players-->  
                        </div>
                                <!-- Tab Two - Players Staff -->
                    <!-- End Items Gallery filters-->       
                </div>
                
 
<br><br>
                       

      
  @stop

