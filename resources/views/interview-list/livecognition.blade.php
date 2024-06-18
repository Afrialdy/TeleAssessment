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
        
        <li>Live Cognition</li>
    </ul>
    <main class="content px-3 py-3">
        <div class="container-fluid">
            <div class="dropdown-container mb-4 d-flex justify-content-between align-items-center">
                <div>
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        LIVE COGNITION
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('artistic') }}">ARTISTIC</a></li>
                        <li><a class="dropdown-item" href="{{ route('agreeableness') }}">AGREEABLENESS</a></li>
                        <li><a class="dropdown-item" href="{{ route('conscientiousness') }}">CONSCIENTIOUSNESS</a></li>
                        <li><a class="dropdown-item" href="{{ route('conventional') }}">CONVENTIONAL</a></li>
                        <li><a class="dropdown-item" href="{{ route('enterprising') }}">ENTERPRISING</a></li>
                        <li><a class="dropdown-item" href="{{ route('extraversion') }}">EXTRAVERSION</a></li>
                        <li><a class="dropdown-item" href="{{ route('intelektual') }}">INTELEKTUAL</a></li>
                        <li><a class="dropdown-item" href="{{ route('investigative') }}">INVESTIGATIVE</a></li>
                        <li><a class="dropdown-item" href="{{ route('neuroticism') }}">NEUROTICISM</a></li>
                        <li><a class="dropdown-item" href="{{ route('openness') }}">OPENNESS</a></li>
                        <li><a class="dropdown-item" href="{{ route('perseptual') }}">PERSEPTUAL</a></li>
                        <li><a class="dropdown-item" href="{{ route('psikomotor') }}">PSIKOMOTOR</a></li>
                        <li><a class="dropdown-item" href="{{ route('realistic') }}">REALISTIC</a></li>
                        <li><a class="dropdown-item" href="{{ route('social') }}">SOCIAL</a></li>
                    </ul>
                </div>

               {{-- <div class="d-flex gap-2">
                    <a href="{{ route('add-video') }}">
                        <button class="btn btn-success edit">+ Video</button>
                    </a>
                </div> --}}
            </div>

            @foreach($videos as $video)
                <div class="test-box">
                    <h2>{{ $loop->iteration }}</h2>
                    <div class="box-content d-flex flex-column">
                        <div class="content-test d-flex">
                            <video controls>
                            <source src="{{ asset('videos/' . $video->kepribadian . '/' . $video->name . '.mp4') }}">                            </video>
                            <div class="d-flex flex-column">
                                <div class="title-video d-flex flex-column mb-3">
                                    <h3 class="fw-bold fs-5">{{ $video->name }}</h3>
                                    <p>{{ $video->pertanyaan }}</p>
                                </div>
                                <div class="btn-test d-flex">
                                    <button class="btn btn-success">Aktif</button>
                                    <a href="{{ route('edit-pertanyaan', ['id' => $video->id]) }}">
                                        <button class="btn btn-secondary">Edit Survey</button>
                                    </a>
                                    {{-- <form action="{{ route('delete-pertanyaan', ['id' => $video->id]) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="lni lni-trash-can"></i></button>
                                    </form> --}}
                                </div>
                            </div>
                        </div>
                        <div class="deskripsi d-flex flex-column">
                            <h3 class="fw-bold mt-4 fs-4">Deskripsi Video</h3>
                            <p>{{ $video->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
