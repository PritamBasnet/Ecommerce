@extends('frontend.layout.master')
@section('f-content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12"></div>
            <div class="col-md-6 col-12">
                <div class="auth-form">
                    <form action="">
                        <h5 class="h5">Login</h5>
                        <div class="auth-group">
                            <label for="" class="auth-label">Your Email</label>
                            <input type="email" class="auth-input" placeholder="email" required>
                        </div>
                        <div class="auth-group">
                            <label for="" class="auth-label">Your Password</label>
                            <input type="password" class="auth-input" placeholder="password" required>
                        </div>
                        <a href="" class="auth-link">Forgot Password</a>
                        <div class="auth-group">
                            <button class="auth-btn">Login</button>
                        </div>
                        <a href="" class="auth-link">Dont have an account ? Sign Up</a>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-12"></div>
        </div>
    </div>
@endsection
