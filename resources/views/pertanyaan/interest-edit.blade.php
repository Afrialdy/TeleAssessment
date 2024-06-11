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
        <li>Interest and Talent Test</li>
    </ul>
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="dropdown mb-4">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    INTEREST AND TALENT TEST
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('pertanyaan_test') }}">INTERVIEW TEST</a></li>
                    <li><a class="dropdown-item" href="{{ route('cognitive-test') }}">COGNITIVE STYLE TEST</a></li>
                    <li><a class="dropdown-item" href="{{ route('validation-test') }}">VALIDATION TEST</a></li>
                </ul>
            </div>

            <div class="title d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="img/interest and talent.png" alt="">
                    <div class="d-flex flex-column">
                        <h2 class="fw-bold">INTEREST AND TALENT TEST</h2>
                        <p>Tes minat dan bakat.</p>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('interest-edit') }}">
                        <button class="btn btn-secondary edit">Edit</button>
                    </a>
                    <a href="{{ route('interest-test') }}">
                        <button class="btn btn-primary view">View</button>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <h1>Interest Edit</h1>
@endsection
