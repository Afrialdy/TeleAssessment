@extends('layout.master')

@section('style')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://unpkg.com/survey-creator/survey-creator.min.css" type="text/css" rel="stylesheet">
@endsection

@section('content')
    <div id="survey"></div>
    <h1 style="text-align:center"><b>Available Surveys</b></h1>
    <ul>
        @foreach ($surveys as $survey)
        <div class="rev mt-4 flex-column">
            <div class="revbox d-flex flex-column">
                <h5 class="fw-bold">{{ $survey->name }}</h5>
                <div class="d-flex flex-row">
                    <button class="btn btn-primary me-2" onclick="viewSurvey({{ $survey->id }})">View Survey</button>
                    <button class="btn btn-secondary me-2" onclick="editSurvey({{ $survey->id }})">Edit Survey</button>
                    <button class="btn btn-danger" onclick="deleteSurvey({{ $survey->id }})">Delete Survey</button>
                </div>
            </div>
        </div>

        <style>
            .revbox {
                border: 1px solid #ccc;
                padding: 15px;
                margin-bottom: 10px;
                border-radius: 5px;
                max-width: 450px;
            }
            .revbox h5 {
                margin-bottom: 10px;
            }
            .revbox button {
                margin-right: 10px;
            }
        </style>
        @endforeach
    </ul>
    <script src="https://unpkg.com/jquery"></script>
    <script src="https://unpkg.com/survey-core"></script>
    <script src="https://unpkg.com/survey-creator"></script>
    <script>
        function editSurvey(id) {
            $.ajax({
                url: '/pertanyaan_test/' + id,
                method: 'GET',
                success: function(response) {
                    var surveyJSON = response.json;

                    var creatorOptions = {};
                    var surveyCreator = new SurveyCreator.SurveyCreator("surveyCreatorContainer",
                        creatorOptions);
                    surveyCreator.text = JSON.stringify(surveyJSON);
                },
                error: function(xhr) {
                    console.error('Error fetching survey:', xhr);
                }
            });
        }

        function viewSurvey(id) {
            window.location.href = '/pertanyaan_test/' + id;
        }

        function deleteSurvey(id) {
            $.ajax({
                url: '/pertanyaan_test/' + id,
                method: 'DELETE',
                success: function(response) {
                    location.reload();
                },
                error: function(xhr) {
                    console.error('Error deleting survey:', xhr);
                }
            });
        }
    </script>
@endsection
