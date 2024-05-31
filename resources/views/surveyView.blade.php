@extends('layout.master')

@section('style')
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/survey-jquery@1.10.5/survey.jquery.min.js"></script>
    <script src="https://unpkg.com/survey-jquery@1.10.5/themes/index.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/survey-jquery@1.10.5/defaultV2.min.css" />
@endsection

@section('content')
    {{-- <div id="surveyElement" style="position: relative; top: 0; left: 0; right: 0; bottom: 0;"></div>
    <script>
        const json = @json($surveyJson);  // Use the JSON passed from the controller
        const survey = new Survey.Model(json);

        survey.onComplete.add((sender, options) => {
            console.log(JSON.stringify(sender.data, null, 3));
        });

        $("#surveyElement").Survey({
            model: survey
        });
    </script> --}}

    <div id="surveyElement"></div>
    <div id="surveyResult"></div>

    <script>
        // Mengambil data JSON dari PHP dan menginisialisasi variabel json di JavaScript
        const json = @json($surveyJson);

        // Menghapus bagian 'const json =' dan ';' di akhir jika ada
        const surveyJson = JSON.parse(json.replace(/^const json = |;$/g, ''));

        const survey = new Survey.Model(surveyJson);
        survey.onComplete.add((sender, options) => {
            document.querySelector('#surveyResult').innerHTML = "Result: " + JSON.stringify(sender.data, null, 3);
        });

        $("#surveyElement").Survey({ model: survey });
    </script>
@endsection
