    @extends('layouts.layout')
    @section('title', 'Home')
    @section('content')
        <div class=" mt-5">
            <div class="text-center">
                <img src="{{ asset('images/maskeen.jpg') }}" alt="" class="img-thumbnail rounded-circle" width="250px"
                    height="250px">
            </div>
            <div class="mt-5 text-white text-justify">
                <h1 class="fw-bold st-font">Hello,</h1>
                <div class="px-4">
                    <p>As a graduate with a bachelor's degree in <b> Software Engineering</b>, my focus has been on web
                        development. I have gained proficiency in custom design using CSS and JavaScript, and I am familiar
                        with popular frameworks like Bootstrap and Tailwind. Alongside my web development skills, I have
                        also explored the Laravel framework for backend development using PHP, as well as machine learning
                        concepts.</p>
                    <p class="text-worning">Although I do not have professional experience yet, I am enthusiastic about
                        applying my knowledge and skills to real-world projects and continuing to learn and grow in a
                        professional environment.</p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('contact') }}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-info mx-5 my-3">Contact</a>
            </div>
        </div>
    @endsection
