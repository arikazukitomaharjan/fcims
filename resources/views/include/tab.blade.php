        <!-- Section Area - Content Central -->
            <section class="content-info">
                <div class="semiboxshadow text-center">
                    <img src="public/img/img-theme/shp.png" class="img-responsive" alt="">
                </div>
                
<!-- Dark Home -->
                <div class="bg-dark dark-home">
                    <div class="row">
                        <!-- Left Content - Tabs and Carousel -->
                        <div class="col-md-9">
                            <!-- Nav Tabs -->
                            <ul class="nav nav-tabs" id="myTab">
                               <li class="active"><a href="#players-staff" data-toggle="tab">PLAYERS</a></li>
                               <li><a href="#club-news" data-toggle="tab">CLUB TEAMS</a></li>
                               <li><a href="#coach" data-toggle="tab">COACH</a></li>
                            </ul>
                            <!-- End Nav Tabs -->

                            <!-- Content Tabs -->
                            <div class="tab-content">
                             
                                <!-- Tab Two - Players Staff -->
                                <div class="tab-pane active" id="players-staff">
                                    <h3>Players</h3>
                                    <!-- Item Players-->  
                                    <ul id="players-carousel" class="players ">
                                        <!-- Item Player -->  
                                       @foreach($players as $player)
                                        <li class="item-player">
                                        
                                        <a href="{!! url('playerhistories/' . $player->player->id) !!}">
                                            <img class="img-responsive" src="{!! url('public/img/uploads/player/'.$player->player->image) !!}" style="height: 290px; width: 260px;">
                                        </a>
                                            <div class="info-player">
                                                <h4> <a href="{!! url('playerhistories/' . $player->player->id) !!}">{!! $player->player->name!!}</a></h4>
                                                <h5><span>{!! $player->curclub->name!!}</span></h5>
                                                <div class="overlay-player">
<p class="style= color:blue;"> {!! $player->position!!}</p>
                                                </div>
                                            </div>
                                        
                                        </li>
                                       @endforeach
                                        <!-- End Player post -->

                                        
                                       
                                    </ul>
                                    <!-- End Item Players-->  
                                </div>
                                <!-- Tab Two - Players Staff -->

                                <!-- Tab Theree - Club Teams -->
                                <div class="tab-pane" id="club-news">
                                    <h3>Club Teams</h3>
                                    <!-- Clubs Carousel-->  
                                    <ul id="clubs-carousel" class="clubs-teams">
                                        <!-- Item carousel club -->  
                                        <li class="row">
                                            <!-- Item clubs --> 
                                            <div class="col-sx-12 col-sm-6 col-md-6">
                                                <div class="item-clubs">
                                                    @foreach($club as $club)
                                                    <div class="img-clubs">

                                                       <a href="{!! url('clubhistories/' . $club->club->id) !!}">
                                                        <img class="img-responsive" src="{!! url('public/img/uploads/club/'.$club->club->image) !!}" style="height: 250px; width: 310px;">
                                                        </a>

                                                    </div>
                                                    <div class="info-clubs">
                                                        <h4><a href="{!! url('clubhistories/' . $club->club->id) !!}">{!! $club->name!!}</a></h4>
                                                        <p>{!! $club->location!!}</p>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            

                                            


                                        </li>
                                       
                                       
                                    </ul>
                                    <!-- End Clubs Carousel-->  
                                </div>
                                <!-- Tab Theree - Club Teams -->
                                 <!-- Tab Two - Players Staff -->
                                <div class="tab-pane" id="coach">
                                    <h3>Coach</h3>
                                    <!-- Item Players-->  
                                    <ul id="coach-carousel" class="players ">
                                        <!-- Item Player -->  
                                       @foreach($coach as $coach)
                                        <li class="item-player">
                                        
                                        <a href="{!! asset('img/uploads/coach/' . $coach->image) !!}">
                                            <img class="img-responsive" src="{!! url('public/img/uploads/coach/'.$coach->image) !!}" style="height: 310px; width: 250px;" >
                                        </a>
                                            <div class="info-player">
                                                <h4><a href="#">{!! $coach->name!!}</a></h4>
                                                <h5><span>{!! $coach->name!!}</span></h5>
                                                <div class="overlay-player">
                                                    sabin mahrajan
                                                </div>
                                            </div>
                                        
                                        </li>
                                       @endforeach
                                        <!-- End Player post -->
                                        </ul>
                            </div>

                            <!-- Content Tabs --></div>
                        </div> 
                        <!-- Left Content - Tabs and Carousel -->    

                        <!-- Right Content - Content Counter -->
                        <div class="col-md-3">
                            <aside>
                                <div class="title-color text-center">
                                    <h4>World Cup Championship</h4>
                                </div>

                                <div class="content-counter content-counter-home">
                                    <p class="text-center"> 
                                        <i class="fa fa-clock-o">
                                            

                                        </i> 
                                        Countdown Till Start World Cup</p>
                                
                                  
                                    <div id="event-one" class="counter">World Cup</div>
                                     <p>World Cup Match</p>
                                     <div id="event-two" class="counter">British Gorkha Cup</div>
                                      <p>British Gorkha Cup</p>
                                      <div id="event-three" class="counter">World Cup</div>
                                    <ul class="post-options">
                                        <li><i class="fa fa-calendar"></i>June 12, 2014</li>
                                        <li><i class="fa fa-clock-o"></i>Kick-of, 12:00 PM</li> 
                                    </ul>
                                     <a class="btn btn-primary" href="#">
                                        VIEW EVENT PAGE
                                        <i class="fa fa-trophy"></i>
                                    </a>
                                </div>
                            </aside>            
                            <!-- Content Counter -->
                        </div>
                        <!-- End Right Content - Content Counter -->
                    </div>
                </div>   
                <!-- Dark Home -->