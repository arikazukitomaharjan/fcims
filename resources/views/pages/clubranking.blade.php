 @extends('master')
 @section('slider')
  		{{--slider section--}} 
  		<!-- Section Title -->           
            <section class="section-title img-gallery">
                <div class="overlay-bg"></div>
                <div class="container">
                    <h1>Club Ranking</h1>
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
                            <li><a href="{{ url('clubranking') }}">Club Ranking</a></li>
                                                                 
                        </ul>
                    </div>        
                </div>



                <!-- Content Central -->
                <div class="container">
                    <!-- Nav Filters -->
                    <div class="portfolioFilter">
                      <br>
                     
                      <h1> BRITISH GORKHA CUP</h1>
                    </div>

                    <!-- End Nav Filters -->
					
                    <!-- Items Gallery filters-->
        
                     <!-- Items Gallery filters-->
                    <div class="portfolioplayerContainer">
                        
                           <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
            <th >CLUB NAME</th>
            <th >ADDRESS</th>
            <th >EMAIL</th>
             <th >CONTACT</th>
            <th >WIN COUNT</th>
            
                                 
    </tr>
    </thead>
    <tbody>
    @foreach($clubhistories as $clubhistory)
      <tr>
         <td>{!!$clubhistory->club->name!!}</td> 
        <td>{!!$clubhistory->club->tole!!}</td> 
         <td>{!!$clubhistory->club->email_id!!}</td> 
          <td>{!!$clubhistory->club->contact_no!!}</td> 
          <td>{!!$clubhistory->goal_count!!}</td> 
       
                            
      </tr>
    @endforeach
   
   
    
   
    
    </tbody>
    </table>
                        <!-- End Items Gallery filters-->       
                       
                    </div>
                <!-- End Content Central -->



                       
</div>     
 <br><br>
        {{--end of slider section--}}
  @stop

