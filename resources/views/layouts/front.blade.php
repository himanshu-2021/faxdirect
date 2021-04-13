<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <!--headrescript -->

   @include('common.headerscript')

   <body>
    <div id="wrapper">
      <!-- BEGIN HEADER -->
      <div class="clearfix"> </div>

         @yield('content')
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

      @include('common.footerscript')
      @stack('scripts_start')

      @stack('scripts_end')
         <!--footrescript -->
   </body>
</html>
