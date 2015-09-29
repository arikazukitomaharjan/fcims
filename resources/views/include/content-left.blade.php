
   <!-- Content Central -->
                <div class="container padding-top">
                    <div class="row">

<!-- content Column Left -->
                   <div class="col-xs-12 col-md-6 col-lg-7">                      
                            <!-- Recent Post -->
                            <div class="panel-box">
                            
                                <div class="titles">
                                    <h4>Recent News</h4>
                                </div>

                                <!-- Post Item -->@foreach($article as $article)
                                <div class="post-item">

                                    <div class="row">

                                        <div class="col-md-3">

                                            <div class="img-hover">
                                           
                                              <img class="img-responsive" src="{!! url('public/img/uploads/article/'.$article->image) !!}" >
                                               
                                               <div class="overlay"><a href="single-news.html">+</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <h4><a href="{!! url('articles/'.$article->id) !!}">{!! $article->title!!}</a></h4>
                                            <p class="data-info">{!! $article->date_created!!}</p>
                                            <p>{!! substr($article->description,0,150)!!}
</p><a href="{!! url('articles/'.$article->id) !!}"> Read more ... </a>
                                            </div>
                                   
                                   </div>
                                </div>@endforeach
                                 <!-- End Post Item -->

                            

                               
                                 <!-- End Post Item -->
                            </div>  
                            <!-- End Recent Post -->  
                              
                           
                        </div>
                         <!-- End content Left -->
