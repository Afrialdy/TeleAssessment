@extends('layout.master')

@section('style')
    <style>
        /* Style the list */
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
        }

        /* Display list items side by side */
        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }

        /* Add a slash symbol (/) before/behind each list item */
        ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
        }

        /* Add a color to all links inside the list */
        ul.breadcrumb li a {
            color: #0275d8;
            text-decoration: none;
        }

        /* Add a color on mouse-over */
        ul.breadcrumb li a:hover {
            color: #01447e;
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pertanyaan-test.css') }}">
    <!-- Main Content -->

    <ul class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('pertanyaan_test') }}">Pertanyaan Test</a></li>
        <li>Interview Test</li>
    </ul>
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="dropdown mb-4">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    INTERVIEW TEST
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('interest-test') }}">INTEREST AND TALENT TEST</a></li>
                    <li><a class="dropdown-item" href="{{ route('cognitive-test') }}">COGNITIVE STYLE TEST</a></li>
                    <li><a class="dropdown-item" href="{{ route('validation-test') }}">VALIDATION TEST</a></li>
                </ul>
            </div>

            <div class="title d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="img/interview test.png" alt="">
                    <div class="d-flex flex-column">
                        <h2 class="fw-bold">INTERVIEW TEST</h2>
                        <p>Face Sentiment Analysis & Voice Sentiment Analysis.</p>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <a href="">
                        <button class="btn btn-secondary edit">Edit</button>
                    </a>
                    <a href="">
                        <button class="btn btn-primary view">View</button>
                    </a>
                </div>
            </div>

            <div class="test-box">
                <h2>01</h2>
                <div class="box-content d-flex flex-column">
                    <div class="content-test d-flex">
                        <video controls>
                            <source src="{{ asset('videos/FRONTEND PROGRESS.mp4') }}" type="video/mp4">
                        </video>
                        <div class="d-flex flex-column">
                            <div class="title-video d-flex flex-column mb-3">
                                <h3 class="fw-bold fs-5">Interview Video AI</h3>
                                <p>Ceritakan tentang situasi di mana Anda harus mengatasi konflik di tempat kerja. Bagaimana Anda menyelesaikannya?</p>
                            </div>
                            <div class="btn-test d-flex">
                                <button class="btn btn-success">Aktif</button>
                                <a href="{{ route('edit-pertanyaan') }}">
                                    <button class="btn btn-secondary">Edit Survey</button>
                                </a>
                                <button class="btn btn-danger"><i class="lni lni-trash-can"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="deskripsi d-flex flex-column">
                        <h3 class="fw-bold mt-4 fs-4">Deskripsi Video</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus expedita fugit quod quia
                            officia tenetur voluptates at odit dicta optio facilis reiciendis commodi inventore quae eos,
                            consectetur cupiditate praesentium excepturi ut odio. Suscipit error dignissimos ex cum a,
                            perferendis reiciendis ipsam dolor, autem harum, officiis dolorum quis assumenda provident
                            blanditiis!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
