@extends('frontend.layout.master')
@section('f-content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12"></div>
            <div class="col-md-6 col-12">
                <div class="auth-form">
                    <form action="">
                        <h5 class="h5">Register</h5>
                        <div class="auth-group">
                            <label for="" class="auth-label">UserName</label>
                            <input type="text" class="auth-input" placeholder="name" required>
                        </div>
                        <div class="auth-group">
                            <label for="" class="auth-label">Email</label>
                            <input type="email" class="auth-input" placeholder="email" required>
                        </div>
                        <div class="auth-group">
                            <label for="" class="auth-label">Password</label>
                            <input type="password" class="auth-input" placeholder="password" required>
                        </div>
                        <div class="auth-group">
                            <button class="auth-btn">Register</button>
                        </div>
                        <a href="" class="auth-link">Have an account ? Login In</a>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-12"></div>
        </div>
    </div>
@endsection
