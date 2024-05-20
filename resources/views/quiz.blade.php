@extends('layout.master')

@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/survey-knockout@1.7.28/survey.ko.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.10/ace.min.js" type="text/javascript" charset="utf-8">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.10/ext-language_tools.js" type="text/javascript"
         charset="utf-8"></script>
    <link href="https://cdn.jsdelivr.net/npm/survey-creator@1.7.28/survey-creator.css" type="text/css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/survey-creator@1.7.28/survey-creator.js"></script>
@endsection

@section('content')
    <!-- Main Content -->
    <section id="main-content" style="width:100%">
        <div id="surveyContainer">
            <div id="creatorElement"></div>
        </div>
    </section>

    <script src="{{ asset('js/surveyjsScript.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/surveyScript.js') }}"></script>
@endsection
