
                        <!-- content Sidebar Center -->
                       <aside class="col-xs-6 col-sm-6 col-md-3 col-lg-3">                   
                            <!-- Locations -->
                            

                            <!-- Video presentation -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>See live worldcup</h4>
                                </div>
                                <!-- Locations Video --> 
                                <div class="row">
                                    <iframe src="#" class="video"></iframe>
                                    <div class="col-md-12">
                                        <h4>   </h4>
                                        <p>www.sabin.info.np  </div>
                                </div>
                                <!-- End Locations Video --> 
                            </div>  
                            <!-- End Video presentation-->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4>See live match</h4>
                                </div>
                                <!-- Locations Video --> 
                                <div class="row">
                                    <iframe src="#" class="video"></iframe>
                                    <div class="col-md-12">
                                        <h4></h4>
                                        <p> </div>
                                </div>

                                <!-- End Locations Video --> 
                            </div>   
                                
                                <!-- End Locations Video --> 
                             

                        </aside>
                        <!-- End content Sidebar Center -->

                        <!-- content Sidebar Right -->
                         <aside class="col-xs-6 col-sm-6 col-md-3 col-lg-2">                  
                            <!-- Diary -->
                            <div class="panel-box">
                                <div class="titles">
                                    <h4><i class="fa fa-calendar"></i>Events</h4>
                                </div>
                                <!-- List Diary --> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>National Championship</p>
                                        <ul class="list-diary">
                                            <!-- Item List Diary --> 
                                            @foreach($events as $event)
                                            <li>
                                                <h5>{!! $event->championship->championship_name!!} <span>{!! $event->time!!}</span></h5>
                                                <ul class="club-logo">
                                                    <li>
                                                        <img src="{!! url('public/img/uploads/home/'.$event->homeclub->image) !!}" alt="">
                                                        <h6>{!! $event->homeclub->name!!}</h6>
                                                    </li>

                                                    <li>
                                                        <img src="{!! url('public/img/uploads/home/'.$event->awayclub->image) !!}" alt="">
                                                        <h6>{!! $event->awayclub->name!!}</h6>
                                                    </li>
                                                </ul>
                                            </li>
                                            @endforeach
                                            <!-- End Item List Diary --> 

                                            <!-- Item List Diary --> 
                                           
                                        </ul>
                                       
                                    </div>
                                </div>
                                <!-- End List Diary -->                                
                            </div>  
                            <!-- End Diary --> 

                            <!-- Adds Sidebar -->
                            <div class="panel-box">
                               
                            </div>  
                            <!-- End Adds Sidebar -->
                        </aside>
                        
                        
                    </div>                     
                </div>  
                <!-- End Content Central -->