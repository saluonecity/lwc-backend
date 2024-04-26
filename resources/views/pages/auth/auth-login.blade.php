@extends('layouts.app-auth')

@section('title', 'Login')

@section('main')
<div class="col-md-8 col-lg-6 col-xl-5">
                    
    <div class="account-card-box mt-5">
        <div class="card mb-0">
            <div class="card-body p-4">

                <div class="text-center">
                    <div class="my-3">
                        <a href="#">
                            <span><img src="{{ asset('assets') }}/images/logo.png" alt="" height="28"></span>
                        </a>
                    </div>
                    <h5 class="text-muted text-uppercase py-3 font-16">Sign In</h5>
                </div>

                <form method="POST" action="{{ route('login') }}" class="mt-2 needs-validation" novalidate="">
                    @csrf
                    <div class="form-group mb-3">
                        <input name="email" id="email" class="form-control @error('email') is-invalid @enderror" type="email" value="{{ old('email') }}" placeholder="Enter your email" required="">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <input name="password" id="email" class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                        <div class="invalid-feedback">
                            please fill in your password
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit"> Log In </button>
                    </div>

                    <a href="#" class="text-muted"><i class="mdi mdi-lock mr-1"></i>Forgot your password?</a>

                </form>

            </div>
        </div>
    </div>

</div>
@endsection