<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('frontend/js/main.js')}}"></script>





<script>


  $(window).load(function(){

  var fullnewurl    =  window.location.href
  var fullurl   =    fullnewurl.split("/")
  var lasturlstring = 	 fullurl.pop()


 if( lasturlstring  ===  'about.php'){

     $('.aboutd').addClass('activeds')
 } else{}

 if(lasturlstring  ===  'PrivacyPolicy.php' ){

      $('.PrivacyPolicyd').addClass('activeds')

 }else{}

  if(lasturlstring  ===  'TermandCondition.php' ){

      $('.TermandConditiond').addClass('activeds')

 }else{}


});
  </script>
