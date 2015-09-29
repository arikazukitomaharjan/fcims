
  @include('adminInclude/head')


  {{--headeer section--}}
  <header class="site-header">
        @include('adminInclude/header')
  </header>
  {{--end of header section--}}
 
  {{--navigation section--}}
   @include('adminInclude/navigation')
  {{--end of navigation section--}}
 <div class="ch-container">
    <div class="row">
   
         {{--left navigation section--}}
         @include('adminInclude/leftNav')
         {{--end of left navigation section--}}
    
         <div id="content" class="col-lg-10 col-sm-10">
                @include('adminInclude/errors')

                @include('adminInclude/message')
       

        
            <!-- content starts -->
        
                @yield('breadcrumb')
          </div>

          

          
          <div class="col-md-10">
            {{--container section--}}
               @yield('adminContent')
          </div>  
    </div>

         
      
</div>

          @yield('js_code')
   
  <script src="{{ asset('public/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- library for cookie management -->
<script src="{{ asset('public/js/jquery.cookie.js') }}"></script>
<!-- calender plugin -->
<script src="{{ asset('public/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('public/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
<!-- data table plugin -->
<!-- <script src="/js/jquery.dataTables.js"></script> -->
<script src="{{ asset('public/js/jquery.dataTables.js') }}"></script>
<!-- select or dropdown enhancer -->
<script src="{{ asset('public/bower_components/chosen/chosen.jquery.min.js') }}"></script>
<!-- plugin for gallery image view -->
<script src="{{ asset('public/bower_components/colorbox/jquery.colorbox-min.js') }}"></script>
<!-- notification plugin -->
<script src="{{ asset('public/js/jquery.noty.js') }}"></script>
<!-- library for making tables responsive -->
<script src="{{ asset('public/bower_components/responsive-tables/responsive-tables.js') }}"></script>
<!-- tour plugin -->
<script src="{{ asset('public/bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js') }}"></script>
<!-- star rating plugin -->
<script src="{{ asset('public/js/jquery.raty.min.js') }}"></script>
<!-- for iOS style toggle switch -->
<script src="{{ asset('public/js/jquery.iphone.toggle.js') }}"></script>
<!-- autogrowing textarea plugin -->
<script src="{{ asset('public/js/jquery.autogrow-textarea.js') }}"></script>
<!-- multiple file upload plugin -->
<script src="{{ asset('public/js/jquery.uploadify-3.1.min.js') }}"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="{{ asset('public/js/jquery.history.js') }}"></script>
<!-- application script for Charisma demo -->
<script src="{{ asset('public/js/charisma.js') }}"></script>


</body>
</html>

