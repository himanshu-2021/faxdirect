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
                <form class="m-t" action="">
                    <div class="form-group row">
                        <input type="text" class="form-control" placeholder="Username" required="">
                    </div>
                    <div class="form-group row">
                        <input type="email" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="form-group row">
                        <input type="text" class="form-control" placeholder="Company Name" required="">
                    </div>
                    <div class="form-group row">
                        <input type="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="form-group row">
                        <input type="password" class="form-control" placeholder="Confirm Password" required="">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-sm Signup-btn">Signup</button>
                    </div>

                    <hr>
                    <p class=" text-center p-margin-bottom-0px"><small class="small-style">Already have an account?</small></p>

                    <div class="text-center">
                        <a class="btn  btn-secondary  btn-sm" href="{{route('user.login')}}">Log into account</a>
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
