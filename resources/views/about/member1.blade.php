@extends('layouts.app')

@section('title', 'Member 1 - Full Stack Developer')

@section('content')
<div class="container my-5">
    <!-- Back Button -->
    <div class="row mb-3">
        <div class="col-12">
            <a href="{{ route('about') }}" class="btn btn-outline-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left me-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
                Back to Team
            </a>
        </div>
    </div>

    <!-- Page Header -->
    <div class="row mb-5">
        <div class="col-lg-8 mx-auto text-center">
            <h1 class="display-4 fw-bold mb-3">AHMAD SAYUTI BIN HAMIDAN</h1>
            <p class="lead text-muted">CB23096</p>
        </div>
    </div>

    <!-- Background Section -->
    <div class="row mb-5 align-items-center">
        <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card border-0 shadow">
                <img src="{{ asset('images/member1.jpg') }}" 
                     class="card-img-top rounded" alt="Member 1 Profile">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4">My Background</h2>
                    <p class="card-text">
                        My journey into the world of technology has been one of growing fascination, and as a third-year 
                        software engineering student, I've found my passion squarely in the dynamic field of web development. 
                        While my studies cover the broad spectrum of software design, from data structures to algorithms, it's 
                        the process of building applications for the web that truly captivates me.
                    </p>
                    <p class="card-text">
                        My focus has naturally gravitated towards both the front-end and back-end. I've spent countless hours 
                        diving into HTML, CSS, and JavaScript, the foundational pillars of the web. More recently, my coursework 
                        and personal projects have led me to modern frameworks like Laravel and Flutter.
                    </p>
                    <p class="card-text mb-0">
                        As I progress in my studies, I am eager to deepen my knowledge and apply these skills to real-world 
                        challenges. The web is a platform that is constantly evolving, and I am excited to be part of the 
                        generation of developers who will build its future, creating solutions that are accessible, scalable, 
                        and impactful.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4">Technical Skills</h2>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h5 class="text-primary mb-3">Frontend Development</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <strong>HTML5 & CSS3:</strong> 
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-success" style="width: 95%"></div>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <strong>JavaScript & ES6+:</strong>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-success" style="width: 90%"></div>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <strong>Bootstrap & Tailwind:</strong>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-success" style="width: 88%"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-md-6">
                            <h5 class="text-primary mb-3">Backend Development</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <strong>PHP & Laravel:</strong>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-danger" style="width: 92%"></div>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <strong>MySQL & PostgreSQL:</strong>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-danger" style="width: 87%"></div>
                                    </div>
                                </li>
                                <li class="mb-2">
                                    <strong>Git & Version Control:</strong>
                                    <div class="progress" style="height: 10px;">
                                        <div class="progress-bar bg-warning" style="width: 93%"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hobbies Section -->
    <div class="row">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h2 class="card-title mb-4">Hobbies & Interests</h2>
                    <div class="row g-3">
                        <div class="col-md-3 col-sm-6">
                            <div class="text-center p-3 bg-light rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-laptop text-primary mb-2" viewBox="0 0 16 16">
                                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                                </svg>
                                <p class="mb-0 fw-semibold">Coding</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="text-center p-3 bg-light rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-book text-success mb-2" viewBox="0 0 16 16">
                                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                </svg>
                                <p class="mb-0 fw-semibold">Reading</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="text-center p-3 bg-light rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-camera text-danger mb-2" viewBox="0 0 16 16">
                                    <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                                    <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                </svg>
                                <p class="mb-0 fw-semibold">Photography</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="text-center p-3 bg-light rounded">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-music-note-beamed text-warning mb-2" viewBox="0 0 16 16">
                                    <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
                                    <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
                                    <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
                                </svg>
                                <p class="mb-0 fw-semibold">Music</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection