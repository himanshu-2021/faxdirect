<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="{{asset('admin/plugins/slider/bootstrap-slider.min.css')}}">
    <link href="{{asset('admin/plugins/summernote/summernote.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">

    <!-- CORE CSS -->
    <link rel="stylesheet" href="{{asset('admin/plugins/file-upload/jquery.fileupload.css')}}">
    <link href="{{asset('admin/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/metis-menu/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/simple-line-icons-master/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/plugins/c3/c3.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/widget/widget.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/calendar/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/plugins/ui/jquery-ui.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/plugins/toastr/toastr.min.css')}}"/>
    <!-- THEME CSS -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/css/theme/dark.css')}}" rel="stylesheet" type="text/css" />
    <!-- PAGE LEVEL SCRIPTS -->
    @stack('style_start')

    @stack('style_end')
 </head>
