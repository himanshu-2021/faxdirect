<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>



    <!-- Favicons -->
    <link href="{{asset('frontend/img/')}}" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">


    {{-- <style> .btn-style{    /* display: block; */
      position: relative;
      color: #2c2e3c;
      padding: 5px 15px 7px 15px;
      margin-left: 5px;
      transition: 0.3s;
      background: #ef6603;
      font-size: 14px;
      border-radius: 50px;
      font-family: "Open Sans", sans-serif;
      color: white;}
    </style> --}}

        @stack('style_start')

        @stack('style_end')

  </head>
