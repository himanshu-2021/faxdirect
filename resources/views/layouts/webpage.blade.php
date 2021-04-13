<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
   <!--headrescript -->

   @include('frontend.headerscript')

   <body>
        @include('frontend/header')
        <!-- End Header -->
             @yield('content')

            <!-- ======= Footer ======= -->
              @include('frontend/footer')
            <!-- End Footer -->

            @include('frontend.footerscript')
            @stack('scripts_start')

            @stack('scripts_end')
               <!--footrescript -->
   </body>
</html>
