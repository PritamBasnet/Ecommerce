@extends('frontend.layout.master')
@section('f-content')
    <div class="row imageRow" style="background-image: url('{{ asset('frontend/image/main.jpg') }}')">
        <h2 class="h3">Contact</h2>
    </div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="form-wrapper">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Your Email</label>
                        <input type="email" class="form-control" placeholder="Email..." id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 300px"></textarea>
                        <label for="floatingTextarea2">How can we help?</label>
                    </div>
                    <div class="makingauto" style="padding-top: 20px;">
                        <a class="load-btn">Send</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <h5 class="h6" style="padding-top:32px;"><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;Address
                    <br>
                    <span class="text-contact" style="padding-left: 28px;">Sundar Hariacha-4 Morang Baliya
                    </span>
                </h5>
                <h5 class="h6" style="padding-top:18px;"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;Let's Talk
                    <br>
                    <span class="text-contact" style="padding-left: 28px;">+977 9815363240
                    </span>
                </h5>
                <h5 class="h6" style="padding-top:18px;"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;Sales Support
                    <br>
                    <span class="text-contact" style="padding-left: 28px;">contact@example.com
                    </span>
                </h5>
            </div>
        </div>
    </div>
@endsection
