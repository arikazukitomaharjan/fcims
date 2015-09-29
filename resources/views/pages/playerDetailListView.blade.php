 @extends('master')
 @section('slider')
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
                            {!! Form::open(array('method' => 'Get','url' => 'playerDetail')) !!}
                             {!! form::submit('Grid View',[' class'=>'btn btn-primary form-control'])!!}                               

                            {!! Form::close() !!}
                             </div>
                              </div>
                        
                    </div>

                    <!-- End Nav Filters -->
					
                    <!-- Items Gallery filters-->
        
                     <!-- Items Gallery filters-->
                    <div class="portfolioplayerContainer">
                        
                           <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
    <tr>
            <th >PLAYER NAME</th>
            <th >T. ADDRESS</th>
            <th >P. ADDRESS</th>
            <th >HEIGHT</th>
            <th >WEIGHT</th>           
            <th >POSITION</th>
            <th >TOTAL GOAL</th>
             <th >CLUB</th>
              <th >TROPHY</th>
            
                                 
    </tr>
    </thead>
    <tbody>
    @foreach($players as $player)
      <tr>
        <td><a href="{!! url('playerhistories/' . $player->player->id) !!}">{!!$player->player->name !!}</a></td>                            
        <td>{!!$player->player->temporary_address!!}</td> 
        <td>{!!$player->player->permanent_address!!}</td> 
        <td>{!!$player->player->height!!} ft</td> 
        <td>{!!$player->player->weight!!} kg</td>
        <td>{!!$player-> position!!}</td>  
        <td>{!!$player-> goal!!}</td>        
        <td>{!!$player->curclub->name !!}</td>  
        <td>{!!$player->won_trophies !!}</td>  
                                    
       
                            
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

