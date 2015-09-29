 @extends('master')
 @section('content')
        {{--slider section--}} 
        <!-- Section Title -->   
               
            <section class="section-title img-gallery">
                <div class="overlay-bg"></div>
                <div class="container">
                    <h1>Club</h1>
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
                    <img src="{!! url('public/img/img-theme/shp.png') !!}" class="img-responsive" alt="">
                </div>

                <!-- Content Central -->
                <div class="container">
                    <!-- Nav Filters -->
                    <div class="portfolioFilter">
                        <h2>Club </h2>
                    </div>
                    <!-- End Nav Filters -->
                    
                    <!-- Items Gallery filters-->
        
                     <!-- Items Gallery filters-->
                    <div class="portfolioclubContainer">
                        
                        <ul>
                        <div class="row">
                            <div class="col-md-2">                       
                           
                                
                                        <!-- Item Player -->  
                                       
                                    
                                        
                                        <img class="img-responsive" src="{!! url('public/img/uploads/club/'.$club->club->image) !!}" >
                                    
                            </div>
                            <div class="col-md-9">    

                                           <h4>{!!$club->club->name!!}</h4>                                                
                                                  
                                          <h6>{!!$club->club->tole!!}</h6>
                                          <h6>{!!$club->club->contact_no!!}</h6>
                                          
                                      
                            </div>            
                                        <!-- End Player post -->i

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
                                        <li><a href="#players" data-toggle="tab">Players</a>
                                        </li>
                                      
                                        
                                    </ul>                
                              
                             <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane in active" id="basic">
                                                 
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Decription</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>Name:</td>
                                      <td>{!!$club->club->name!!}</td>

                                    </tr>
                                      <tr>
                                          <td>Established date:</td>
                                          <td>{!!$club->club->est_date!!}</td>
                                       </tr><tr>
                                      <td>Name:</td>
                                      <td>{!!$club->club->CEO!!}</td>

                                    </tr>
                                      <tr>
                                          <td>Country:</td>
                                          <td>{!!$club->club->country!!}</td>


                                    </tr>
                                      <tr>
                                          <td>Zone:</td>
                                          <td>{!!$club->club->zone!!}</td>
                                       </tr><tr>
                                      <td>District:</td>
                                      <td>{!!$club->club->district!!}</td>

                                    </tr>
                                      <tr>
                                          <td>Municipality:</td>
                                          <td>{!!$club->club->municipality!!}</td>
                                       </tr>  <tr>
                                      <td>Ward No:</td>
                                      <td>{!!$club->club->ward_no!!}</td>

                                    </tr>
                                      <tr>
                                          <td>tole:</td>
                                          <td>{!!$club->club->tole!!}</td>
                                       </tr><tr>
                                      <td>contact_no:</td>
                                      <td>{!!$club->club->contact_no!!}</td>

                                    </tr>
                                      <tr>
                                          <td>Email ID:</td>
                                          <td>{!!$club->club->email_id!!}</td>
                                       </tr><tr>
                                      <td>Name:</td>
                                      <td>{!!$club->club->website!!}</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="players">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>Player name</th>
                                    <th>Position</th> 
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($clubhistories as $clubhistories)
                                <tr>

                                    <td> {!! $clubhistories->playerName!!}   </td>
                                    <td>   {!! $clubhistories->position!!} </td>

                                </tr>
                                @endforeach
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
                
                </section>
<br><br>

                       

      
  @stop

