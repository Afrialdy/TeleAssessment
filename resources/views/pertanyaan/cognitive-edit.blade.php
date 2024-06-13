@extends('layout.master')

@section('style')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/survey-core@1.11.1/defaultV2.css" />
    <link rel="stylesheet" href="https://unpkg.com/survey-creator-core@1.11.1/survey-creator-core.css" />
    <script src="https://unpkg.com/knockout/build/output/knockout-latest.js"></script>
    <script src="https://unpkg.com/survey-core@1.11.1/survey.core.min.js"></script>
    <script src="https://unpkg.com/survey-core@1.11.1/survey.i18n.min.js"></script>
    <script src="https://unpkg.com/survey-core@1.11.1/themes/index.min.js"></script>
    <script src="https://unpkg.com/survey-knockout-ui@1.11.1/survey-knockout-ui.min.js"></script>
    <script src="https://unpkg.com/survey-creator-core@1.11.1/survey-creator-core.min.js"></script>
    <script src="https://unpkg.com/survey-creator-core@1.11.1/survey-creator-core.i18n.min.js"></script>
    <script src="https://unpkg.com/survey-creator-knockout@1.11.1/survey-creator-knockout.min.js"></script>
    <style>
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
        }

        ul.breadcrumb li {
            display: inline;
            font-size: 18px;
        }

        ul.breadcrumb li+li:before {
            padding: 8px;
            color: black;
            content: "/\00a0";
        }

        ul.breadcrumb li a {
            color: #0275d8;
            text-decoration: none;
        }

        ul.breadcrumb li a:hover {
            color: #01447e;
            text-decoration: underline;
        }

        #surveyContainer {
            margin-top: 10px;
            height: 100vh; /* Set to full viewport height */
        }

        #surveyCreatorContainer {
            position: relative;
            height: 100%;
            width: 100%;
            box-sizing: border-box;
        }

        @media (max-width: 768px) {
            #surveyCreatorContainer {
                padding: 10px;
            }
        }
    </style>
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/pertanyaan-test.css') }}">
    <!-- Main Content -->

    <ul class="breadcrumb">
        <li><a href="{{ route('dashboard') }}">Home</a></li>
        <li><a href="{{ route('pertanyaan_test') }}">Pertanyaan Test</a></li>
        <li>Cognitive Style Test</li>
    </ul>
    <main class="content px-3 py-4">
        <div class="container-fluid">
            <div class="dropdown mb-4">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    COGNITIVE STYLE TEST
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('pertanyaan_test') }}">INTERVIEW TEST</a></li>
                    <li><a class="dropdown-item" href="{{ route('interest-test') }}">INTEREST AND TALENT TEST</a></li>
                    <li><a class="dropdown-item" href="{{ route('validation-test') }}">VALIDATION TEST</a></li>
                </ul>
            </div>

            <div class="title d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="img/cognitive style.png" alt="">
                    <div class="d-flex flex-column">
                        <h2 class="fw-bold">COGNITIVE STYLE TEST</h2>
                        <p>Mengetes kemampuan kognitif test.</p>
                    </div>
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ route('cognitive-edit') }}">
                        <button class="btn btn-secondary edit">Edit</button>
                    </a>
                    <a href="{{ route('cognitive-test') }}">
                        <button class="btn btn-primary view">View</button>
                    </a>
                </div>
            </div>
            <div id="surveyContainer">
                <div id="surveyCreatorContainer"></div>
            </div>
        </div>
    </main>
    <script>
        const options = {
            showLogicTab: true
        };
        const creator = new SurveyCreator.SurveyCreator(options);

        document.addEventListener('DOMContentLoaded', function() {
            const surveyId = "56b827d8-e785-438a-97d8-138430fd3af4"; // Example survey ID

            // Fetch survey data from backend
            fetch(`/api/surveys/${surveyId}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Survey data loaded:', data);
                    creator.text = JSON.stringify(data.json); // Load survey JSON into Survey Creator
                })
                .catch(error => console.error('Error loading survey:', error));

            // Save survey data to backend
            creator.saveSurveyFunc = function(saveNo, callback) {
                const surveyData = { json: JSON.parse(creator.text) };
                fetch(`/api/surveys/${surveyId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token for Laravel
                    },
                    body: JSON.stringify(surveyData)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        alert('Survey saved successfully');
                    }
                    callback(saveNo, true);
                })
                .catch(error => {
                    console.error('Error saving survey:', error);
                    callback(saveNo, false);
                });
            };

            creator.render("surveyCreatorContainer");
        });
    </script>
@endsection
