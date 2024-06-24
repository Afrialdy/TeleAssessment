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
    <link rel="stylesheet" href="{{ asset('css/validation-test.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pertanyaan-test.css') }}">
    <!-- Main Content -->

    <ul class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('pertanyaan_test') }}">Pertanyaan Test</a></li>
        <li>Validation Test</li>
    </ul>
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="dropdown mb-4">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    VALIDATION TEST
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('pertanyaan_test') }}">INTERVIEW TEST</a></li>
                    <li><a class="dropdown-item" href="{{ route('cognitive-test') }}">COGNITIVE TEST</a></li>
                </ul>
            </div>

            <div class="title d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="img/validation test.png" alt="">
                    <div class="d-flex flex-column">
                        <h2 class="fw-bold">VALIDATION TEST</h2>
                        <p>Test tertulis untuk memvalidasi hasil asesmen interaktif.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Test Kognitif Validasi Mudah</h1>
                            <p>Serangkaian test validasi kognitif tingkat mudah (Rendah).</p>
                            <a href="{{ route('validationRendah') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Test Kognitif Validasi Susah</h1>
                            <p>Serangkaian test validasi kognitif tingkat susah (Tinggi).</p>
                            <a href="{{ route('validationTinggi') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="asess">
                        <div class="asessbox d-flex flex-column align-items-start mt-3">
                            <h1>Test Validasi Kepribadian</h1>
                            <p>Serangkaian test validasi kepribadian.</p>
                            <a href="{{ route('validationKepribadian') }}" class="hasil-tes">
                                <button type="button" class="btn btn-primary">Detail</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
