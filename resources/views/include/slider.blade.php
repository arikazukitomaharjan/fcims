
  <!-- Slide -->           
            <section class="camera_wrap camera_white_skin" id="slide">
                <!-- Item Slide - Caption --> 
                @foreach($sliders as $slider)
                <div  data-src="{!! url('public/img/uploads/slider/1.jpg') !!}">
                
                    <div class="style-caption fadeFromTop">
                        <div class="overlay-bg"></div>
                         <div class="container"> 
                            <div class="row">
                                <div class="col-md-7">
                                    <h1 class="animated fadeInRight">
                                        {!! $slider->title!!}
                                    </h1>   
                                    <p class="animated fadeInRight delay1"> {!! $slider->description!!}</p> 
                                    <div class="more animated fadeInRight delay2">
                                        <a href="#" class="btn btn-primary" name="subscribe" >More Info</a>
                                    </div>
                                </div>    
                            </div>                     
                        </div>      
                    </div>
                  
                </div>
                <!-- End Item Slide - Caption  -->
                @endforeach
                
                <!-- End Item Slide - Caption  -->  
            </section>   
            <!-- End Slide --> 