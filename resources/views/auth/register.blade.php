@extends('layouts.auth')

@section('content')
    <form id="send_register">

        <div class="mb-3">
            <label class="form-label" for="useremail">Email</label>
            <input name="email" type="email" class="form-control" id="useremail" placeholder="Enter email">
        </div>

        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input name="name" type="text" class="form-control" id="username" placeholder="Enter username">
        </div>

        <div class="mb-3">
            <label class="form-label" for="userpassword">Password</label>
            <input name="password" type="password" class="form-control" id="userpassword" placeholder="Enter password">
        </div>

        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="auth-terms-condition-check">
            <label class="form-check-label" for="auth-terms-condition-check">I accept <span class="text-dark cursor-p">Terms and Conditions</span></label>
        </div>



        <div class="mt-3 text-end">
            <button id="send_form" class="btn btn-primary w-sm waves-effect waves-light" type="button" >Register</button>
        </div>

        <div class="mt-4 text-center">
            <div class="signin-other-title">
                <h5 class="font-size-14 mb-3 title">Sign up using</h5>
            </div>


            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="{{ route('social.login',['provider' => 'facebook']) }}" class="social-list-item bg-primary text-white border-primary">
                        <i class="mdi mdi-facebook"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="{{ route('social.login',['provider' => 'google']) }}" class="social-list-item bg-danger text-white border-danger">
                        <i class="mdi mdi-google"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mt-4 text-center">
            <p class="text-muted mb-0">Already have an account ? <a href="{{route('login')}}" class="fw-medium text-primary"> Login</a></p>
        </div>
    </form>
@endsection
@push('JS')
    <script>
        $('#send_form').click(function (){
            return _POST_FORM('#send_register', '{{route('register')}}')
        })
    </script>
@endpush
