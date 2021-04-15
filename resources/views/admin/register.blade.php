@extends('layouts.front')

@section('title', trans('register'))
@push('style_start')

@endpush
@section('content')
 <!-- BEGIN CONTAINER -->
 <div class="account">

    <div class="container">
        <div class="row">
            <div class="account-col text-center">
                <img src="{{asset('admin/images/logo2.png')}}" alt="" class="img-thumbnail">
                <h4 class="h4-style">Create New Account</h4>
                @include('common.flash_message');
                <form class="m-t" action="{{route('user.register.post')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group row">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="form-group row">
                        <input type="text" class="form-control" placeholder="Company Name" name="bussiness_name" value="{{old('bussiness_name')}}">
                    </div>
                    <div class="form-group row">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group row">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-sm Signup-btn">Signup</button>
                    </div>

                    <hr>
                    <p class=" text-center p-margin-bottom-0px"><small class="small-style">Already have an account?</small></p>

                    <div class="text-center">
                        <a class="btn  btn-secondary  btn-sm" href="{{route('login')}}">Log into account</a>
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
