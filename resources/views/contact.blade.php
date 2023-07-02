@extends('layouts.layout')
@section('title', 'contact')
@section('content')
    <div class="text-white">
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">Contact Me</h1>
            <div class="row text-white mb-5">
                <p class="mx-auto mb-5">
                    I value your feedback, inquiries, and suggestions. I am dedicated to assisting you and ensuring that you
                    have the best possible experience with my services. Whether you have a question, need assistance, or
                    simply want to share your thoughts, I am here to listen.

                    Feel free to reach out to me using the contact information provided below. I strive to respond to all
                    inquiries promptly, so you can expect to hear back from me as soon as possible.
                </p>
                <div class="col-sm-9 mb-5">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inutName">Your Name</label>
                                <input type="text" class="form-control mt-2" id="inputName">
                            </div>
                            <div class="col-md-6">
                                <label for="inutEmail">Your Email *</label>
                                <input type="text" class="form-control mt-2" id="inputEmail" required>
                            </div>
                            <div class="col-md-12">
                                <label for="inutEmail">Your Subject</label>
                                <input type="text" class="form-control mt-2" id="inputSubject">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="inutEmail">Your message *</label>
                                <textarea type="text" class="form-control mt-2" id="inputStextarea"></textarea>
                            </div>
                            <button class="btn btn-primary" type="submit">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3 text-center">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fas text-warning fa-map-marker-alt fa-2x i-color"></i>
                            <p>Jehlum, Punjab, Pakistan</p>
                        </li>
                        <li>
                            <i class="fas text-warning fa-phone mt-4t fa-2x i-color"></i>
                            <p>+92 336-9474517</p>
                        </li>
                        <li>
                            <i class="fas text-warning fa-envelope mt-4t fa-2x i-color"></i>
                            <p>Mmaskeen791@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center ">
            <a href="#" target="_blank">
                <i class="fab text-warning fa-twitter i-color"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fab text-warning fa-facebook i-color"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fab text-warning fa-instagram i-color"></i>
            </a>
            <a href="#" target="_blank">
                <i class="fab text-warning fa-linkedin i-color"></i>
            </a>
        </div>
    </div>
@endsection
