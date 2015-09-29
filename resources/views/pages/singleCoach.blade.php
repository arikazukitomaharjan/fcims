 @extends('master')
 @section('content')
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
                            <li><a href="{{ url('#') }}">Coach Detail</a></li>
                                                                 
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
                        <h2>{!!$coach->name!!} </h2>
                    </div>
                    <!-- End Nav Filters -->
                    
                    <!-- Items Gallery filters-->
        
                     <!-- Items Gallery filters-->
                    <div class="portfolioplayerContainer">
                        
                        <ul>
                        <div class="row">
                            <div class="col-md-2">                       
                           
                                
                                        <!-- Item Player -->  
                                       
                                    
                                        
                                        <img class="img-circle" src="{!! url('public/img/uploads/thumbnails/coach/'.$coach->coach->image) !!}" >
                                    
                            </div>
                            <div class="col-md-9">    

                                            <h4>{!!$coach->coach->name!!}</h4>
                                                 <h6>{!!$coach->coach->address!!}</h6>
                                                  <h4>{!!$coach->coach->email_id!!}</h4>
                                                  <h6>{!!$coach->coach->contact_home!!}</h6>
                                      
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
                                        <li class="active"><a href="#basic" data-toggle="tab">Basic Information</a></li>
                                        <li><a href="#histories" data-toggle="tab">Histories</a>
                                        </li>
                                        <li><a href="#award" data-toggle="tab">Award History</a>
                                        </li>
                                        
                                    </ul>                
                                                                    
                   
                              
                             <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane in active" id="basic">
                                                 
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>
                                </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>Fullname:</td>
                                        <td>{!!$coach->coach->name!!}</td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td>{!!$coach->coach->address!!}</td>
                                    </tr><tr>
                                        <td>Email ID:</td>
                                        <td>{!!$coach->coach->email_id!!}</td>
                                    </tr><tr>
                                        <td>Work:</td>
                                        <td>{!!$coach->coach->work!!}</td>
                                    </tr>
                                    <tr>
                                        <td>Contact Address:</td>

                                        <td>
                                            <tr><td>{!!$coach->coach->contact_home!!}</td>
                                                <td>{!!$coach->coach->contact_mobile!!}</td>
                                            </tr>
                                        </td>


                                    </tr>
                                   
                              
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="histories">

                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Information</th>

                                </tr>
                                </thead>
                                <tbody>
                                     <tr>
                                        <td>Club name:</td>
                                        <td>{!!$coach->club->name!!}</td>
                                    </tr>
                                    <tr>
                                        <td>Status:</td>
                                        <td>{!!$coach->status!!}</td>
                                    </tr> <tr>
                                        <td>Start Date:</td>
                                        <td>{!!$coach->date_start!!}</td>
                                    </tr>
                                    <tr>
                                        <td>End Date:</td>
                                        <td>{!!$coach->date_end!!}</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="award">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>Award</th>
                                    <th>Year</th>
                                </tr>
                                </thead>
                                <tbody>

                                     <tr>                                        
                                                                           
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

