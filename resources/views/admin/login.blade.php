@extends('layouts.front')

@section('title', trans('login'))
@push('style_start')

@endpush
@section('content')
 <!-- BEGIN CONTAINER -->
 <div class="account">

    <div class="container">
       <div class="row">
          <div class="account-col text-center">
             <img src="{{asset('admin/images/logo2.png')}}" alt="" class="img-thumbnail">
             <h4 class="h4-style">Log into your account</h4>
             @include('common.flash_message');
             {{-- <h4 class="h4-style-eight">Himanshu Kushwaha</h4> --}}
             <form class="m-t" role="form" action="{{route('user.login.post')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                <div class="form-group row">
                   <input type="text" class="form-control" placeholder="Username" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group row">
                   <input type="password" class="form-control" placeholder="Passowrd" name="password">
                </div>

                <div class="text-center">
                   <button type="submit" class="btn btn-primary btn-sm Login-btn">Login</button>
                </div>
                <a href="{{'forgot-password'}}"><small class="small-style">Forgot password?</small></a>
                <hr>

                <p class=" text-center p-margin-bottom-0px"><small class="small-style">Or sign in with</small></p>
                <div class="text-center">
                   <a href="#" class="btn btn-sm  btn-bordered fb-btn">
                      <i class="fa fa-facebook-square"></i>
                      <span>Facebook</span>
                   </a>
                   <a href="#" class="btn btn-sm  btn-bordered Goog-btn">
                      <i class="fa fa-google-plus-square"></i>
                      <span>Google</span>
                   </a>
                </div>
                <hr>

                <p class=" text-center p-margin-bottom-0px"><small class="small-style">Do not have an account?</small></p>
                <div class="text-center">
                   <a class="btn  btn-secondary btn-sm " href="{{route('user.register')}}">Create an account</a>
                </div>
             </form>
          </div>
       </div>
    </div>

 </div>
 <!-- END CONTAINER -->
@endsection

@push('scripts_start')

@endpush
