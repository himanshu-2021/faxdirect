<!-- JAVASCRIPT FILES -->
<script type="text/javascript" src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/plugins/metis-menu/metisMenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/plugins/bootstrap/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/plugins/slim-scroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/plugins/c3/d3.v3.min.js')}}" charset="utf-8"></script>
<script src="{{asset('admin/plugins/c3/c3.min.js')}}"></script>
<!--<script type="text/javascript" src="../../../www.gstatic.com/charts/loader.js"></script>-->
<script src="{{asset('admin/plugins/calendar/moment.min.js')}}"></script>
<script src="{{asset('admin/plugins/calendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('admin/plugins/ui/jquery-ui.js')}}"></script>
<script src="{{asset('admin/plugins/map/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('admin/plugins/map/jquery-jvectormap-world-mill-en.js')}}"></script>
{{-- <!--<script src="{{asset('admin/plugins/morris_chart/morris.js')}}"></script>-->
<!--<script src="{{asset('admin/plugins/morris_chart/raphael-2.1.0.min.js')}}"></script>--> --}}
<!-- PAGE LEVEL FILES -->
<script src="{{asset('admin/plugins/data-tables/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/plugins/data-tables/dataTables.tableTools.js')}}"></script>
<script src="{{asset('admin/plugins/data-tables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/data-tables/dataTables.responsive.js')}}"></script>
<script src="{{asset('admin/plugins/data-tables/tables-data.js')}}"></script>
<!-- Custom FILES -->
<script type="text/javascript" src="{{asset('admin/js/custom.js')}}"></script>
{{-- <!--<script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>--> --}}
<script type="text/javascript" src="{{asset('admin/js/index.js')}}"></script>


<script>
$(document).ready(function(){
$(".chevron-up").click(function(){
$(".description").fadeToggle();

});
});
</script>


<script>
$(window).load(function(){

var fullnewurl    =  window.location.href
var fullurl   =    fullnewurl.split("/")
var lasturlstring = 	 fullurl.pop()

//here write the about us etc pages route name
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

<script>
$(document).ready(function(){
$(".new").click(function(){
$(".none-web-header").toggle();

});
});
</script>
