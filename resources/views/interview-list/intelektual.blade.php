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
    <link rel="stylesheet" href="{{ asset('css/interview-list.css') }}">
    <!-- Main Content -->

    <ul class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('pertanyaan_test') }}">Pertanyaan Test</a></li>
        <li><a href="{{ route('pertanyaan_test') }}">Interview Test List</a></li>
        <li>Intelektual</li>
    </ul>
    <main class="content px-3 py-3">
        <div class="container-fluid">
            <div class="dropdown-container mb-4 d-flex justify-content-between align-items-center">
                <div>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        INTELEKTUAL
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('artistic') }}">ARTISTIC</a></li>
                        <li><a class="dropdown-item" href="{{ route('agreeableness') }}">AGREEABLENESS</a></li>
                        <li><a class="dropdown-item" href="{{ route('conscientiousness') }}">CONSCIENTIOUSNESS</a></li>
                        <li><a class="dropdown-item" href="{{ route('conventional') }}">CONVENTIONAL</a></li>
                        <li><a class="dropdown-item" href="{{ route('enterprising') }}">ENTERPRISING</a></li>
                        <li><a class="dropdown-item" href="{{ route('extraversion') }}">EXTRAVERSION</a></li>
                        <li><a class="dropdown-item" href="{{ route('investigative') }}">INVESTIGATIVE</a></li>
                        <li><a class="dropdown-item" href="{{ route('live-cognition') }}">LIVE COGNITION</a></li>
                        <li><a class="dropdown-item" href="{{ route('neuroticism') }}">NEUROTICISM</a></li>
                        <li><a class="dropdown-item" href="{{ route('openness') }}">OPENNESS</a></li>
                        <li><a class="dropdown-item" href="{{ route('perseptual') }}">PERSEPTUAL</a></li>
                        <li><a class="dropdown-item" href="{{ route('psikomotor') }}">PSIKOMOTOR</a></li>
                        <li><a class="dropdown-item" href="{{ route('realistic') }}">REALISTIC</a></li>
                        <li><a class="dropdown-item" href="{{ route('social') }}">SOCIAL</a></li>
                    </ul>
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('add-video') }}">
                        <button class="btn btn-success edit">+ Video</button>
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
