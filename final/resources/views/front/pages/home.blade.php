@extends('layouts.front')

@section('content')
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"></h1>
                <hr>
				@include('notifications.status_message')
				@include('notifications.errors_message')
                <p></a>  <a href="">WELCOME TO LARAVEL</a>.</p>
                <a href="{{ url('/login') }}" class="btn btn-primary btn-xl page-scroll">Login</a>  <a href="{{ url('/register') }}" class="btn btn-danger btn-xl page-scroll">Register</a>
            </div>
        </div>
    </header>

	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"></h2>
                    <hr class="primary">
                    <p></a></p>
                </div>
                <div class="col-lg-12 text-center">
                    <a href="{{ url('/login') }}" class="btn btn-primary btn-xl page-scroll"><i class="fa fa-user sr-contact"></i> Login</a>
					<a href="{{ url('/register') }}" class="btn btn-danger btn-xl page-scroll"><i class="fa fa-user-plus  sr-contact"></i> Register</a>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>
            </div>
        </div>
    </aside>


@endsection
