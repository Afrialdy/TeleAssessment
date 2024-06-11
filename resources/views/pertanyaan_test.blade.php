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
    <link rel="stylesheet" href="{{ asset('css/testing.css') }}">
    <!-- Main Content -->

    <ul class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('pertanyaan_test') }}">Pertanyaan Test</a></li>
        <li>Interview Test</li>
    </ul>
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="title d-flex">
                <img src="img/interview test.png" alt="">
                <div class="d-flex flex-column">
                    <h2 class="fw-bold">INTERVIEW TEST</h2>
                    <p>Face Sentiment Analysis & Voice Sentiment Analysis.</p>
                </div>
            </div>

            <div class="test-box">
                <h2>01</h2>
                <div class="box-content d-flex flex-column">
                    <div class="content-test d-flex align-items-center">
                        <iframe src="https://www.youtube.com/embed/WeiM_vffWAw?si=TR6RJ_QEG592zqdx"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="btn-test d-flex flex-column">
                            <button class="btn btn-success">Aktif</button>
                            <a href="{{ route('edit-pertanyaan') }}">
                                <button class="btn btn-secondary">Edit Survey</button>
                            </a>
                            <button class="btn btn-danger"><i class="lni lni-trash-can"></i></button>
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
