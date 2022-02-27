@extends('layouts/app')

@section('title', 'Contact Us')

@section('content')
    <div class="container" style="color: var(--black);">
        <h1 class="mt-4">Contact us<i class="uil uil-pagelines"></i></h1>
        <p>Having problems with our website? Feel free to contact us!</p>
        <hr>
        <div class="col-md-8" style="display: flex;">
            <div class="col-md-12 row">
                <div class="col-md-6">
                    <label class="form-label" style="font-size: 20px;">Email</label>
                    <input type="email" class="form-control" placeholder="ex: namjoohyuk@gmail.com">
                </div>
                <div class="col-md-6">
                    <label class="form-label" style="font-size: 20px;">Full Name</label>
                    <input type="text" class="form-control" placeholder="ex: Nam Joo Hyuk">
                </div>    
            </div>
        </div>

        <div class="col-md-8">
            <label class="form-label mt-4" style="font-size: 20px;">Messages</label>
            <textarea class="form-control" rows="4" placeholder="Type your messages here"></textarea>
        </div>
        <a href="#" class="btn mt-4 send-now-btn">Send Now</a>
    </div>
@endsection