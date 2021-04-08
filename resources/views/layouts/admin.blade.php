<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <!--headrescript -->

   @include('common.headerscript')

   <body>
      <div id="wrapper">
      <!-- BEGIN HEADER -->
      <div class="page-header navbar fixed-top">
         <!-- BEGIN HEADER INNER -->

		<!--top-headre.php -->
        @include('common.top_bar')

         <!-- END HEADER INNER -->
      </div>
      <!-- END HEADER -->
      <!-- BEGIN HEADER & CONTENT dropdown-divider -->
      <div class="clearfix"> </div>
      <!-- END HEADER & CONTENT dropdown-divider -->
      <!-- BEGIN CONTAINER -->
      <div class="page-container">

			<!--sidebar.php-->
            @include('common.sidebar')

         <!-- BEGIN CONTENT BODY -->

         @yield('content')

         @include('common.footer')

        <!-- END CONTAINER -->
        </div>

      <!-- SCROLL TO TOP -->
      <a href="#" id="toTop"></a>
      <!-- PRELOADER -->
      <div id="preloader">
         <div class="inner">
            <span class="loader"></span>
         </div>
      </div>
      <!-- /PRELOADER -->
      </div>

   </body>

   @include('common.footerscript')
   @stack('scripts_start')

   @stack('scripts_end')
      <!--footrescript -->
</html>
