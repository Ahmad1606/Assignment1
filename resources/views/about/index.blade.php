@extends('layouts.app')

@section('title', 'About Our Team - Portfolio')

@section('content')
<div class="container my-5">
    <!-- Page Header -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-3">Meet Our Team</h1>
            <p class="lead text-muted">
                We are a group of three passionate developers working together to create amazing web solutions. 
                Get to know each team member by clicking on their profile below.
            </p>
        </div>
    </div>

    <!-- Team Members Cards -->
    <div class="row g-4 mb-5">
        <!-- Member 1 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm hover-card">
                <img src="{{ asset('images/member1.jpg') }}" 
                     class="card-img-top" 
                     alt="Member 1"
                     style="height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h4 class="card-title mb-2">AHMAD SAYUTI BIN HAMIDAN</h4>
                    <p class="text-muted mb-3">CB23096</p>
                    <p class="card-text mb-4">
                        Thrid year student at Universiti Malaysia Pahang Al Sultan Abdullah, major in Software Engineering.
                    </p>
                    <a href="{{ route('about.member1') }}" class="btn btn-primary w-100">
                        View Profile
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Member 2 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm hover-card">
                <img src="{{ asset('images/member2.jpeg') }}" 
                     class="card-img-top" 
                     alt="Member 2"
                     style="height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h4 class="card-title mb-2">Steve Demius</h4>
                    <p class="text-muted mb-3">Frontend Developer</p>
                    <p class="card-text mb-4">
                        Expert in creating beautiful and responsive user interfaces with modern frameworks.
                    </p>
                    <a href="{{ route('about.member2') }}" class="btn btn-success w-100">
                        View Profile
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Member 3 -->
        <div class="col-md-4">
            <div class="card h-100 shadow-sm hover-card">
                <img src="{{ asset('images/member3.jpg') }}" 
                     class="card-img-top" 
                     alt="Member 3"
                     style="height: 300px; object-fit: cover;">
                <div class="card-body text-center">
                    <h4 class="card-title mb-2">Member Name 3</h4>
                    <p class="text-muted mb-3">UI/UX Designer</p>
                    <p class="card-text mb-4">
                        Passionate about creating intuitive designs and enhancing user experience.
                    </p>
                    <a href="{{ route('about.member3') }}" class="btn btn-danger w-100">
                        View Profile
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Overview Section -->
    <div class="row mb-5">
        <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5">
                    <h2 class="text-center mb-4">About Our Team</h2>
                    <p class="text-center mb-4">
                        We are a dedicated team of three professionals who came together with a shared passion 
                        for web development and creating innovative digital solutions. Our diverse skill sets 
                        complement each other perfectly, allowing us to tackle projects from multiple angles 
                        and deliver comprehensive results.
                    </p>
                    <div class="row text-center g-4">
                        <div class="col-md-4">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-lightbulb text-warning mb-3" viewBox="0 0 16 16">
                                    <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
                                </svg>
                                <h5>Creative Solutions</h5>
                                <p class="text-muted mb-0">Innovative approaches to solve complex problems</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-people text-primary mb-3" viewBox="0 0 16 16">
                                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                                </svg>
                                <h5>Team Collaboration</h5>
                                <p class="text-muted mb-0">Seamless teamwork for better results</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-trophy text-success mb-3" viewBox="0 0 16 16">
                                    <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
                                </svg>
                                <h5>Quality Delivery</h5>
                                <p class="text-muted mb-0">Committed to excellence in every project</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('styles')
<style>
    .hover-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .hover-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
    }
</style>
@endsection
@endsection