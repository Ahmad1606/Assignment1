@extends('layouts.app')

@section('title', 'Home - My Portfolio')

@section('content')
<div class="container my-5">
    <!-- Hero Section -->
    <div class="row align-items-center">
        <div class="col-lg-6">
            <h1 class="display-4 fw-bold mb-3">Welcome to Our Portfolio</h1>
            <p class="lead text-muted mb-4">
                Hello! We're a team of three passionate developers dedicated to creating beautiful and functional websites. 
                Explore our work and get to know more about our team's skills and experience.
            </p>
            <div class="d-flex gap-3">
                <a href="{{ route('about') }}" class="btn btn-primary btn-lg">Learn More</a>
                <a href="{{ route('contact') }}" class="btn btn-outline-secondary btn-lg">Get in Touch</a>
            </div>
        </div>
    </div>

    <!-- Quick Links Section -->
    <div class="row mt-5 g-4">
        <div class="col-md-4">
            <div class="card h-100 text-center shadow-sm">
                <div class="card-body">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-person-circle text-primary" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </div>
                    <h5 class="card-title">About Me</h5>
                    <p class="card-text">Learn about our team members, their backgrounds, skills, and experience in web development.</p>
                    <a href="{{ route('about') }}" class="btn btn-outline-primary">View Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 text-center shadow-sm">
                <div class="card-body">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-code-slash text-success" viewBox="0 0 16 16">
                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                        </svg>
                    </div>
                    <h5 class="card-title">Our Skills</h5>
                    <p class="card-text">Discover the technologies and tools we use to build amazing projects.</p>
                    <a href="{{ route('about') }}" class="btn btn-outline-success">View Skills</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 text-center shadow-sm">
                <div class="card-body">
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-envelope text-danger" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                    </div>
                    <h5 class="card-title">Contact Me</h5>
                    <p class="card-text">Have a question or want to work together? Send me a message!</p>
                    <a href="{{ route('contact') }}" class="btn btn-outline-danger">Send Message</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection