<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tes Validasi Bakat Minat</title>
    <style>
        body {
             font-family:"Montserrat",sans-serif;
             text-align: center;
             background-color: #413E72;
             overflow-x: hidden;
        }
        ol{
            padding: 0;
        }
        .answer-button,
        .prev-button,
        .next-button,
        .go-to-question {
            background-color: #0f33ff; /* Change button color to blue */
            color: #fff; /* Change text color to white */
            font-family: 'Montserrat'; /* Apply Montserrat font */
        }

        .container {
            max-width: 1054px;
             margin: 0 auto;
             padding: 4px;
             padding-top: 0;
        }

        .judulTest {
            font-size: 40px;
            font-weight: 800;
            color: white;
        }

        p {
             font-size: 24px;
             margin-top: 20px;
 
         }
 
         .questionForm {
             margin-top: 20px;
             background-color: #fff;
             border-radius: 15px;
             padding-left :53px;
             padding-right :53px;
             padding-top: 34px;
             padding-bottom: 34px;
         }
         .pertanyaan{
             margin: 0;
             font-size: 20px;
             padding-bottom: 18px;
             font-weight: bold;
             text-align: left;
         }

        .answer-form {
            display: flex;
            flex-direction: column;
            align-items: left;
        }

        .answer-button {
            margin-top: 10px;
            padding: 10px;
            font-size: 18px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .answer-button:hover {
            background-color: #2980b9;
        }
        

        .prev-button {
            max width: 600px;
            width: 50%;
            
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #0f33ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .next-button {
            max width: 600px;
            width: 50%;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #0f33ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .go-to-question {
            width: 50%;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #2ecc71;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px; 
        }

        .next-button:hover {
            background-color: #2980b9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a shadow on hover */
        }

        /* Hover effect for previous button */
        .prev-button:hover {
            background-color: #2980b9;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a shadow on hover */
        }


        /* Style for radio buttons */
        .radio-label {
            display: flex;
            align-items: center;
            padding-bottom: 9px;
            font-size: 20px;
        }

        .radio-input {
            margin-right: 10px;
        }

        .question-navigation {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px; 
            /* width: 300px;
            display: inline-block;
            background-color: #fff;
            border-radius: 2px;
            box-shadow: 0 0 2px rgb(204, 204, 204);
            transition: all .5s ease;
            position: relative;
            font-size: 14px;
            color: #474747;
            height: 100%; */
            text-align: left
        }
        /* .question-navigation .select {
            cursor: pointer;
            display: block;
            padding: 10px
        } */
        .image {
            max-width: 100%;
            
            max-height: 100%;
        }
        .answerimage {
            max-width: 100%;
            max-height: 200px;
        }
        .question-image-container {
            max-width: 100%; /* Adjust as needed */
            margin: 0 auto;
        }

        .select-dropdown,
        .select-dropdown * {
            margin: 0;
            padding: 0;
            position: relative;
            box-sizing: border-box;
        }
        .select-dropdown {
            position: relative;
            background-color: #E6E6E6;
            border-radius: 4px;
        }
        .select-dropdown select {
            font-size: 1rem;
            font-weight: normal;
            max-width: 100%;
            padding: 8px 24px 8px 10px;
            border: none;
            background-color: transparent;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .select-dropdown select:active,
        .select-dropdown select:focus {
            outline: none;
            box-shadow: none;
        }
        .select-dropdown:after {
            content: "";
            position: absolute;
            top: 50%;
            right: 8px;
            width: 0;
            height: 0;
            margin-top: -2px;
            border-top: 5px solid #aaa;
            border-right: 5px solid transparent;
            border-left: 5px solid transparent;
        }

        .submit-button {
            max width: 100%;
            width: ;
            margin-top: 40px;
            margin-bottom:30px;
            padding: 10px 20px;
            font-size: 18px;
            color: black;
            font-weight: 700;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            background-color: #ADE1E5;
            margin-top: 32px;
            margin-bottom: 50px;
            width: 620px;
            height: 45px;
        }

        .submit-button:hover {
            background-color: #6C6AF2;
            color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a shadow on hover */
        }
        .submit-button[disabled] {
            background-color: #ccc; /* Change the background color to a muted gray */
            cursor: not-allowed; /* Change the cursor to indicate it's not clickable */
            color: #999; /* Change the text color to a muted gray */
            box-shadow: none; /* Remove the shadow when disabled */
        }

        .submit-button[disabled]:hover {
            background-color: #ccc; /* Change the background color to a muted gray */
            cursor: not-allowed; /* Change the cursor to indicate it's not clickable */
            color: #999; /* Change the text color to a muted gray */
            box-shadow: none; /* Remove the shadow when disabled */
        }

        .submit-button[disabled]:hover::after {
            content: "Please finish all questions"; /* Tooltip text */
            display: block;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
        }

        #calculate-button {
            max width: 600px;
            width: 50%;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #0f33ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #calculate-button-bakmi {
            max width: 600px;
            width: 50%;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #0f33ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #calculate-button-bakat {
            max width: 600px;
            width: 50%;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #0f33ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }


        /* sidebar */
        .sidebar {
            z-index: 1;
            height: 100%;
            width: 260px;
            position: fixed;
            left: 0;
            border: solid 1px rgba(0, 0, 0, 0.05);
            box-shadow: 1px 0px 2px 0px rgba(0, 0, 0, 0.25);
            background-color: #fff;
            padding: 20px;
            overflow: auto;
        }

        /* Gaya untuk bilah pengguliran WebKit (Chrome, Safari) */
        .sidebar::-webkit-scrollbar {
            width: 8px; /* Lebar bilah pengguliran */
        }
        
        /* Gaya untuk thumb atau pegangan pada bilah pengguliran WebKit */
        .sidebar::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.3); /* Warna pegangan */
            border-radius: 4px; /* Sudut melengkung pegangan */
        }
        
        /* Gaya untuk track atau lintasan pada bilah pengguliran WebKit */
        .sidebar::-webkit-scrollbar-track {
            background-color: rgba(0, 0, 0, 0.1); /* Warna lintasan */
        }
        li::marker{
            font-size: 20px;
            font-weight: 700;
        }
        .page-link {
            color: black;
            font-size: 20px;
            font-weight:700;
        }
        .pagination {
            display: flex;
            gap: 14px;
            margin-bottom: 0;
        }

        .pagination .page-item {
            list-style: none;
        }

        .pagination .page-link {
            text-decoration: none;
            color: #000;
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 4px;
            width: 44px;
        }

        .pagination .page-item.active .page-link {
            background-color: #99D19C;
            border-color: #99D19C;
            color: black;
            cursor: pointer;
        }
        .pagination .page-item.active .page-link:focus{
            box-shadow: none;
            cursor: pointer;
        }    
        .pagination .page-item .page-link:focus{
            box-shadow: none;
            cursor: pointer;
        }

        .pagination .page-item.active .page-link:hover {
            background-color: #99D19C;
            border-color: #99D19C;
            color: black;
            cursor: pointer;
        }
        /* Regular state */
        .page-item.disabled {
            pointer-events: none; /* Disable mouse events for the disabled element */
            gap: 286px;
        }

        /* Hover state */
        .page-item:not(.disabled):hover {
            cursor: pointer; /* Change cursor only when not disabled */
            /* Add any other styles for the hover effect */
        }
        /* Add a hover effect to the "Previous" and "Next" buttons */
        .pagination #previousPage:not(.disabled):hover a.page-link,
        .pagination #nextPage:not(.disabled):hover a.page-link {
            background-color: #99D19C;
            color: black;
            border-color: #99D19C;
            cursor: pointer;
        }
        /* Remove hover effect from pagination buttons */
        .pagination .page-item:not(#previousPage):not(#nextPage) a.page-link:hover {
            background-color: #99D19C;
            color: initial;
            border-color: initial;
            cursor: pointer;
        }
        /* CSS to add a gap between the previous and next images and the pagination links */
        .pagination {
            display: flex;
            justify-content: center;
        }

        /* Set the position of the container to relative to allow absolute positioning of the images */
        .page-item {
            position: relative;
        }
        
        /* Position the images absolutely within their containers */
        .page-item.disabled img,
        .page-item img {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        /* Adjust the left position of the "Next" and "Previous" images */
        .page-item.disabled .next,
        .page-item .previous {
            left: 280px; /* Adjust the left position as needed */
        }

        .page-item.disabled .previous {
            left: auto;
            right: 280px; /* Adjust the right position as needed */
        }
        .page-item .next {
            left: 280px;
            right: auto; /* Adjust the right position as needed */
        }
        .page-item .previous {
            left: auto;
            right: 280px; /* Adjust the right position as needed */
        }
        /* Set the cursor to pointer for the labels' text */
        .radio-label {
            display: inline-block; /* Display the labels as inline blocks */
            cursor: pointer; /* Change the cursor to a pointer */
            max-width: fit-content; /* Set the maximum width of the label to fit its content */
        }
        #countdown {
            font-size: 30px;
            width: 148px;
            height: 49px;
            border-radius: 10px;
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px; /* Add padding for better appearance */
        }

        /* Style the list */
        ul.breadcrumb {
            padding: 10px 16px;
            list-style: none;
            background-color: #eee;
            border-radius: 10px
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
</head>
<body>
    <!-- COMMENT || TAKE FROM DB -->
    {{-- <div class="container">
        <ol id="question-list">
            @php
            $questionCounter = 0;
        @endphp

        @foreach ($data as $modelInstance)
            @php
            $questionCounter++;
            @endphp
            <li class="question" data-tipe="{{ $modelInstance->tipe }}">
                <h1>{{ $modelInstance->pertanyaan }}</h1>
                <div class="answer-form">
                    <form class="answer-form">
                        @for ($i = 1; $i <= 5; $i++)
                            @php
                            $answerAttribute = "jawaban" . $i;
                            $valueAttribute = "value" . $i;
                            @endphp
                            <label class="radio-label">
                                <input type="radio" class="radio-input" name="question_{{ $questionCounter }}" value="{{ $modelInstance->$valueAttribute }}" data-question="{{ $modelInstance->pertanyaan }}">
                                {{ $modelInstance->$answerAttribute }}
                            </label>
                        @endfor
                    </form>
                </div>
            </li>
        @endforeach
        </ol>      
    </div> --}}
    <!-- END COMMENT -->
    
    <div class="container">
        <h1 class="d-flex justify-content-between" style="padding-top: 46px; padding-bottom: 54px;">
            <span style="opacity: 0; width: 148px;">30:00</span>
            <span class="judulTest">Tes Bakat Minat</span>
            <span id="countdown">30:00</span>
        </h1>
        <ul class="breadcrumb">
            <li><a href="{{ route('dashboard') }}">Home</a></li>
            <li><a href="{{ route('pertanyaan_test') }}">Pertanyaan Test</a></li>
            <li><a href="{{ route('validation-test') }}">Validation Test</a></li>
            <li>View Validation Test Kepribadian</li>
        </ul>
        <nav aria-label="Pagination" class="d-flex justify-content-center">
            <ul class="pagination">
            <li class="page-item disabled" id="previousPage">
                <img src="../img/previous.png" alt="" width="43px" height="44px" class="previous" href="#">
            </li>
            <li class="page-item">
                <a class="page-link" href="#" onclick="showContent(1)">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" onclick="showContent(2)">2</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" onclick="showContent(3)">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" onclick="showContent(4)">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" onclick="showContent(5)">5</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" onclick="showContent(6)">6</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#" onclick="showContent(7)">7</a>
            </li>
            <li class="page-item" id="nextPage">
                <img src="../img/next.png" alt="" width="43px" height="44px" class="next" href="#">
            </li>
            </ul>
        </nav>
    </div>
    <div class="content1" style="display: none;">
        <div class="container">
            <ol id="question-list">
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya mudah khawatir</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer1" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer1" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer1" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer1" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer1" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                    </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Suasana hati saya sering cepat berubah</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer2" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer2" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer2" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer2" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer2" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                    </div>
                    <div class="questionForm">
                        <li class="question">
                            <p class="pertanyaan">Perasaan saya berubah-ubah</p>
                            <div class="answer-form">
                                <form class="answer-form">
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer3" value="5">
                                        Sangat tidak setuju
                                    </label>
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer3" value="4">
                                        Tidak setuju
                                    </label>
                                    <label class="radio-label" >
                                        <input type="radio" class="radio-input" name="answer3" value="3">
                                        Netral
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer3" value="2">
                                        Setuju
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer3" value="1">
                                        Sangat Setuju
                                    </label>
                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="questionForm">
                        <li class="question">
                            <p class="pertanyaan">Saya mudah merasa kesal</p>
                            <div class="answer-form">
                                <form class="answer-form">
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer4" value="5">
                                        Sangat tidak setuju
                                    </label>
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer4" value="4">
                                        Tidak setuju
                                    </label>
                                    <label class="radio-label" >
                                        <input type="radio" class="radio-input" name="answer4" value="3">
                                        Netral
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer4" value="2">
                                        Setuju
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer4" value="1">
                                        Sangat Setuju
                                    </label>
                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="questionForm">
                        <li class="question">
                            <p class="pertanyaan">Saya mudah merasa tertekan</p>
                            <div class="answer-form">
                                <form class="answer-form">
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer5" value="5">
                                        Sangat tidak setuju
                                    </label>
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer5" value="4">
                                        Tidak setuju
                                    </label>
                                    <label class="radio-label" >
                                        <input type="radio" class="radio-input" name="answer5" value="3">
                                        Netral
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer5" value="2">
                                        Setuju
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer5" value="1">
                                        Sangat Setuju
                                    </label>
                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="questionForm">
                        <li class="question">
                            <p class="pertanyaan">Saya mudah merasa terganggu</p>
                            <div class="answer-form">
                                <form class="answer-form">
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer6" value="5">
                                        Sangat tidak setuju
                                    </label>
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer6" value="4">
                                        Tidak setuju
                                    </label>
                                    <label class="radio-label" >
                                        <input type="radio" class="radio-input" name="answer6" value="3">
                                        Netral
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer6" value="2">
                                        Setuju
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer6" value="1">
                                        Sangat Setuju
                                    </label>
                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="questionForm">
                        <li class="question">
                            <p class="pertanyaan">Saya mudah merasa jengkel</p>
                            <div class="answer-form">
                                <form class="answer-form">
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer7" value="5">
                                        Sangat tidak setuju
                                    </label>
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer7" value="4">
                                        Tidak setuju
                                    </label>
                                    <label class="radio-label" >
                                        <input type="radio" class="radio-input" name="answer7" value="3">
                                        Netral
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer7" value="2">
                                        Setuju
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer7" value="1">
                                        Sangat Setuju
                                    </label>
                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="questionForm">
                        <li class="question">
                            <p class="pertanyaan">Saya tertarik pada penulisan, membaca, atau menggali informasi.</p>
                            <div class="answer-form">
                                <form class="answer-form">
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer8" value="5">
                                        Sangat tidak setuju
                                    </label>
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer8" value="4">
                                        Tidak setuju
                                    </label>
                                    <label class="radio-label" >
                                        <input type="radio" class="radio-input" name="answer8" value="3">
                                        Netral
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer8" value="2">
                                        Setuju
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer8" value="1">
                                        Sangat Setuju
                                    </label>
                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="questionForm">
                        <li class="question">
                            <p class="pertanyaan">Saya jarang merasa sedih</p>
                            <div class="answer-form">
                                <form class="answer-form">
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer9" value="5">
                                        Sangat tidak setuju
                                    </label>
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer9" value="4">
                                        Tidak setuju
                                    </label>
                                    <label class="radio-label" >
                                        <input type="radio" class="radio-input" name="answer9" value="3">
                                        Netral
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer9" value="2">
                                        Setuju
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer9" value="1">
                                        Sangat Setuju
                                    </label>
                                </form>
                            </div>
                        </li>
                    </div>
                    <div class="questionForm">
                        <li class="question">
                            <p class="pertanyaan">Saya sering merasa sedih</p>
                            <div class="answer-form">
                                <form class="answer-form">
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer10" value="5">
                                        Sangat tidak setuju
                                    </label>
                                    <label class="radio-label" data-correct="true">
                                        <input type="radio" class="radio-input" name="answer10" value="4">
                                        Tidak setuju
                                    </label>
                                    <label class="radio-label" >
                                        <input type="radio" class="radio-input" name="answer10" value="3">
                                        Netral
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer10" value="2">
                                        Setuju
                                    </label>
                                    <label class="radio-label">
                                        <input type="radio" class="radio-input" name="answer10" value="1">
                                        Sangat Setuju
                                    </label>
                                </form>
                            </div>
                        </li>
                    </div>
                </ol> 
        </div>
    </div>
    <div class="content2" style="display: none;">
        <div class="container">
            <ol id="question-list" start="11">
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya lebih suka bekerja di belakang layar</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer11" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer11" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer11" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer11" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer11" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tidak suka menjadi pusat perhatian</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer12" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer12" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer12" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer12" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer12" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya sedikit berkata</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer13" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer13" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer13" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer13" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer13" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tidak keberatan menjadi pusat perhatian</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer14" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer14" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer14" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer14" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer14" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tidak banyak berbicara</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer15" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer15" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer15" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer15" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer15" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tidak banyak berbicara pada orang yang tidak dikenal</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer16" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer16" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer16" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer16" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer16" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya menghidupkan suasana dalam suatu acara</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer17" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer17" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer17" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer17" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer17" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya berinteraksi dengan banyak orang dalam satu waktu</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer18" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer18" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer18" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer18" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer18" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya merasa nyaman berada di sekitar orang lain</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer19" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer19" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer19" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer19" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer19" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya mudah memulai suatu percakapan</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer20" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer20" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer20" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer20" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer20" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
            </ol> 
        </div>
    </div>
    <div class="content3" style="display: none;">
        <div class="container">
            <ol id="question-list" start="21">
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya segera mengerjakan tugas yang diberikan</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer21" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer21" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer21" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer21" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer21" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya telaten dalam mengerjakan tugas</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer22" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer22" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer22" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer22" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer22" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya sering lupa meletakkan kembali pada tempatnya</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer23" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer23" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer23" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer23" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer23" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya memperhatikan hal-hal secara rinci</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer24" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer24" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer24" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer24" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer24" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya melakukan aktivitas sesuai jadwal atau agenda</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer25" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer25" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer25" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer25" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer25" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya sering meninggalkan barang pribadi di sembarang tempat</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer26" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer26" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer26" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer26" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer26" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya selalu mempersiapkan segala hal</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer27" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer27" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer27" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer27" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer27" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya menyukai keteraturan</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer28" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer28" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer28" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer28" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer28" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya sering mengacaukan banyak hal</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer29" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer29" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer29" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer29" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer29" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya sering mengabaikan tugas-tugas saya</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer30" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer30" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer30" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer30" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer30" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
            </ol>  
        </div>
    </div>
    <div class="content4" style="display: none;">
        <div class="container">
            <ol id="question-list" start="31">
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya adalah orang yang lemah lembut</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer31" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer31" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer31" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer31" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer31" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tidak tertarik dengan masalah orang lain</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer32" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer32" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer32" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer32" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer32" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tidak terlalu tertarik dengan kondisi orang lain</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer33" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer33" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer33" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer33" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer33" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tidak terlalu memedukan orang lain</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer34" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer34" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer34" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer34" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer34" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya mampu membuat orang lain merasa nyaman</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer35" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer35" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer35" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer35" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer35" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya sering meluangkan waktu untuk orang lain</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer36" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer36" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer36" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer36" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer36" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya memahami perasaan orang lain</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer37" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer37" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer37" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer37" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer37" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya peduli dengan orang lain</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer38" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer38" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer38" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer38" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer38" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya sering bersikap kasar kepada orang lain</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer39" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer39" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer39" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer39" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer39" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya bersimpati dengan perasaan orang lain</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer40" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer40" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer40" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer40" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer40" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>   
            </ol> 
        </div>
    </div>
    <div class="content5" style="display: none;">
        <div class="container">
            <ol id="question-list" start="41">
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya sering menggunakan istilah-istilah yang sulit</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer41" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer41" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer41" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer41" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer41" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya kesulitan memahami ide yang bersifat abstrak</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer42" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer42" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer42" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer42" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer42" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya menguasai banyak kosakata</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer43" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer43" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer43" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer43" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer43" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya memiliki ide-ide yang cemerlang</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer44" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer44" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer44" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer44" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer44" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya memiliki banyak ide</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer45" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer45" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer45" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer45" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer45" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya cepat dalam memahami sesuatu</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer46" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer46" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer46" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer46" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer46" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tidak tertarik dengan ide-ide abstrak</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer47" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer47" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer47" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer47" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer47" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya memiliki imajinasi yang kuat</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer48" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer48" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer48" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer48" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer48" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tidak memiliki imajinasi yang baik</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer49" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer49" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer49" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer49" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer49" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya meluangkan waktu untuk merefleksikan berbagai hal</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer50" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer50" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer50" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer50" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer50" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>   
            </ol> 
        </div>
    </div>
    <div class="content6" style="display: none;">
        <div class="container">
            <ol id="question-list" start="51">
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya menikmati bekerja dengan tangan dan menggunakan alat-alat</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer51" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer51" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer51" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer51" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer51" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tertarik pada penelitian dan eksplorasi ilmiah</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer52" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer52" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer52" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer52" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer52" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya menikmati mengungkapkan diri melalui seni dan kreativitas</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer53" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer53" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer53" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer53" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer53" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya suka membantu orang lain dan bekerja dalam kelompok</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer54" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer54" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer54" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer54" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer54" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya memiliki minat dalam memimpin dan mempengaruhi orang lain</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer55" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer55" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer55" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer55" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer55" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya menyukai tugas-tugas yang memiliki struktur yang jelas dan rutin</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer56" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer56" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer56" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer56" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer56" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya menikmati olahraga atau aktivitas fisik</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer57" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer57" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer57" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer57" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer57" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tertarik pada penulisan, membaca, atau menggali informasi</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer58" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer58" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer58" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer58" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer58" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya senang berpartisipasi dalam pertunjukkan acara atau acara seni</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer59" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer59" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer59" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer59" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer59" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya suka berinteraksi dengan orang banyak atau membantu mereka</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer60" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer60" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer60" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer60" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer60" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>   
            </ol> 
        </div>
    </div>
    <div class="content7" style="display: none;">
        <div class="container">
            <ol id="question-list" start="61">
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya tertarik pada peluang bisnis dan mengambil resiko</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer61" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer61" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer61" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer61" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer61" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya suka bekerja dengan data dan detail yang akurat</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer62" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer62" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer62" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer62" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer62" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya paling cocok ditempatkan di pekerjaan yang membutuhkan kepekaan mata dan indera manusia lainnya</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer63" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer63" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer63" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer63" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer63" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya paling cocok pada pekerjaan yang membutuhkan gerakan tubuh atau mengandalkan fisik</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer64" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer64" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer64" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer64" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer64" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
                <div class="questionForm">
                    <li class="question">
                        <p class="pertanyaan">Saya paling cocok ditempatkan di pekerjaan yang membutuhkan banyak pemikiran atau konsep</p>
                        <div class="answer-form">
                            <form class="answer-form">
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer65" value="5">
                                    Sangat tidak setuju
                                </label>
                                <label class="radio-label" data-correct="true">
                                    <input type="radio" class="radio-input" name="answer65" value="4">
                                    Tidak setuju
                                </label>
                                <label class="radio-label" >
                                    <input type="radio" class="radio-input" name="answer65" value="3">
                                    Netral
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer65" value="2">
                                    Setuju
                                </label>
                                <label class="radio-label">
                                    <input type="radio" class="radio-input" name="answer65" value="1">
                                    Sangat Setuju
                                </label>
                            </form>
                        </div>
                    </li>
                </div>
            </ol> 
        </div>
    </div>

    <button id="calculate-button" style="display:none">Calculate (Kepribadian)</button>
    <button id="calculate-button-bakmi" style="display: none;">Calculate (Minat)</button> 
    <button id="calculate-button-bakat" style="display: none;">Calculate (Bakat)</button> 
    <button class="calculate-score-button" id="calculate-score" style="display: none;">Calculate Score</button>
    <nav aria-label="Pagination" class="d-flex justify-content-center" style="padding-bottom: 30px;">
        <ul class="pagination">
          <li class="page-item disabled" id="previousPage2">
            <img src="../img/previous.png" alt="" width="43px;" height="44px" class="previous" href="#">
          </li>
          <li class="page-item">
            <a class="page-link" href="#" onclick="showContent(1)">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" onclick="showContent(2)">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" onclick="showContent(3)">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" onclick="showContent(4)">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" onclick="showContent(5)">5</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" onclick="showContent(6)">6</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" onclick="showContent(7)">7</a>
          </li>
          <li class="page-item" id="nextPage2">
            <img src="../img/next.png" alt="" width="43px" height="44px" class="next" href="#">
          </li>
        </ul>
      </nav>
    <button id="submit-button" class="submit-button" disabled title="Please finish all questions">Submit</button>
    
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
            
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    <script>
        var currentPage = 1;
        var totalPages = 7; // Update this with the total number of pages

        function showContent(page) {
        var previousContent = document.querySelector('.content' + currentPage);
        var currentContent = document.querySelector('.content' + page);

        previousContent.style.display = 'none';
        currentContent.style.display = 'block';
        
         window.scrollTo({ top: 0, behavior: 'smooth' });
        currentPage = page;
        updatePagination();
        }

        function updatePagination() {
        var previousPage = document.getElementById('previousPage');
        var nextPage = document.getElementById('nextPage');
        var previousPage2 = document.getElementById('previousPage2');
        var nextPage2 = document.getElementById('nextPage2');

        previousPage.classList.toggle('disabled', currentPage === 1);
        nextPage.classList.toggle('disabled', currentPage === totalPages);
        previousPage2.classList.toggle('disabled', currentPage === 1);
        nextPage2.classList.toggle('disabled', currentPage === totalPages);

        var paginationButtons = document.querySelectorAll('.pagination .page-link');
        paginationButtons.forEach(function(button) {
            if (button.textContent == currentPage) {
            button.parentElement.classList.add('active');
            } else {
            button.parentElement.classList.remove('active');
            }
        });

        previousPage.onclick = function() {
            if (currentPage > 1) {
            showContent(currentPage - 1);
            }
        };

        nextPage.onclick = function() {
            if (currentPage < totalPages) {
            showContent(currentPage + 1);
            }
        };
        previousPage2.onclick = function() {
            if (currentPage > 1) {
            showContent(currentPage - 1);
            }
        };

        nextPage2.onclick = function() {
            if (currentPage < totalPages) {
            showContent(currentPage + 1);
            }
        };
        }
        // Show content1 by default
        showContent(1);
    </script>

<script>
    const startingMinutes = 30; // 30 seconds for testing
    let time = startingMinutes * 60;

    const countdownEl = document.getElementById('countdown');

    const countdownInterval = setInterval(updateCountdown, 1000);

    function updateCountdown() {
      const minutes = Math.floor(time / 60);
      let seconds = time % 60;

      seconds = seconds < 10 ? '0' + seconds : seconds;

      countdownEl.innerHTML = `${minutes}:${seconds}`;
      time--;

      if (time < 0) {
        clearInterval(countdownInterval); // Stop the countdown
        submitForm();
      }
    }
  </script>
    
    {{-- <script>
    // Ini Script Untuk Hitung calculate Bakat Minat
    const scoreRMI1 = document.querySelector('input[name="answer51"]:checked')?.value || 0;
    const scoreRMI2 = document.querySelector('input[name="answer57"]:checked')?.value || 0;
    $resultR = parseInt(scoreRMI1) + parseInt(scoreRMI2);

    const scoreIMI1 = document.querySelector('input[name="answer52"]:checked')?.value || 0;
    const scoreIMI2 = document.querySelector('input[name="answer58"]:checked')?.value || 0;
    $resultI = parseInt(scoreIMI1) + parseInt(scoreIMI2);

    const scoreAMI1 = document.querySelector('input[name="answer53"]:checked')?.value || 0;
    const scoreAMI2 = document.querySelector('input[name="answer59"]:checked')?.value || 0;
    $resultA = parseInt(scoreAMI1) + parseInt(scoreAMI2);

    const scoreSMI1 = document.querySelector('input[name="answer54"]:checked')?.value || 0;
    const scoreSMI2 = document.querySelector('input[name="answer60"]:checked')?.value || 0;
    $resultS = parseInt(scoreSMI1) + parseInt(scoreSMI2);

    const scoreEMI1 = document.querySelector('input[name="answer55"]:checked')?.value || 0;
    const scoreEMI2 = document.querySelector('input[name="answer61"]:checked')?.value || 0;
    $resultE = parseInt(scoreEMI1) + parseInt(scoreEMI2);

    const scoreCMI1 = document.querySelector('input[name="answer56"]:checked')?.value || 0;
    const scoreCMI2 = document.querySelector('input[name="answer62"]:checked')?.value || 0;
    $resultC = parseInt(scoreCMI1) + parseInt(scoreCMI2);

    
    // Function to calculate and assign scoresMI

    function calculateScoresMinat() {
        const scoreRMI1 = document.querySelector('input[name="answer51"]:checked')?.value || 0;
        const scoreRMI2 = document.querySelector('input[name="answer57"]:checked')?.value || 0;
        $resultRMI = parseInt(scoreRMI1) + parseInt(scoreRMI2);

        const scoreIMI1 = document.querySelector('input[name="answer52"]:checked')?.value || 0;
        const scoreIMI2 = document.querySelector('input[name="answer58"]:checked')?.value || 0;
        $resultIMI = parseInt(scoreIMI1) + parseInt(scoreIMI2);

        const scoreAMI1 = document.querySelector('input[name="answer53"]:checked')?.value || 0;
        const scoreAMI2 = document.querySelector('input[name="answer59"]:checked')?.value || 0;
        $resultAMI = parseInt(scoreAMI1) + parseInt(scoreAMI2);

        const scoreSMI1 = document.querySelector('input[name="answer54"]:checked')?.value || 0;
        const scoreSMI2 = document.querySelector('input[name="answer60"]:checked')?.value || 0;
        $resultSMI = parseInt(scoreSMI1) + parseInt(scoreSMI2);

        const scoreEMI1 = document.querySelector('input[name="answer55"]:checked')?.value || 0;
        const scoreEMI2 = document.querySelector('input[name="answer61"]:checked')?.value || 0;
        $resultEMI = parseInt(scoreEMI1) + parseInt(scoreEMI2);

        const scoreCMI1 = document.querySelector('input[name="answer56"]:checked')?.value || 0;
        const scoreCMI2 = document.querySelector('input[name="answer62"]:checked')?.value || 0;
        $resultCMI = parseInt(scoreCMI1) + parseInt(scoreCMI2);

        axios.post('/gotoValidation', {
            resultR: $resultRMI,
            resultI: $resultIMI,
            resultA: $resultAMI,
            resultS: $resultSMI,
            resultE: $resultEMI,
            resultC: $resultCMI
        })
        .then(function (response) {
            console.log("Yeeee"); // Log a success message
        })
        .catch(function (error) {
            console.error("Fail"); // Log any errors
        });
        // Example: Display the scores in the console
        console.log("ScoreR: " + $resultRMI);
        console.log("ScoreI: " + $resultIMI);
        console.log("ScoreA: " + $resultAMI);
        console.log("ScoreS: " + $resultSMI);
        console.log("ScoreE: " + $resultEMI);
        console.log("ScoreC: " + $resultCMI);
    }

    // Untuk Bakat 
    const scorePer = document.querySelector('input[name="answer63"]:checked')?.value || 0;
    $resultPer = parseInt(scorePer) 

    const scorePsi = document.querySelector('input[name="answer64"]:checked')?.value || 0;
    $resultPsi = parseInt(scorePsi) 

    const scoreInt = document.querySelector('input[name="answer65"]:checked')?.value || 0;
    $resultInt = parseInt(scoreInt) 

    function calculateScoresBakat() {
        const scorePer = document.querySelector('input[name="answer63"]:checked')?.value || 0;
        $resultPer = parseInt(scorePer) 

        const scorePsi = document.querySelector('input[name="answer64"]:checked')?.value || 0;
        $resultPsi = parseInt(scorePsi) 

        const scoreInt = document.querySelector('input[name="answer65"]:checked')?.value || 0;
        $resultInt = parseInt(scoreInt) 

        axios.post('/gotoValidationBakat', {
            resultPer: $resultPer,
            resultPsi: $resultPsi,
            resultInt: $resultInt
        })
        .then(function (response) {
            console.log("Yeeee"); // Log a success message
        })
        .catch(function (error) {
            console.error("Fail"); // Log any errors
        });
        // Example: Display the scores in the console
        console.log("ScorePer: " + $resultPer);
        console.log("ScorePsi: " + $resultPsi);
        console.log("ScoreInt: " + $resultInt);
    
    }

    // Add an event listener to the Calculate button to trigger the calculation
    document.querySelector('#calculate-button-bakmi').addEventListener('click', calculateScoresMinat);
    document.querySelector('#calculate-button-bakat').addEventListener('click', calculateScoresBakat);


    document.addEventListener('DOMContentLoaded', function () {
        const submitButton = document.getElementById('submit-button');
        
        submitButton.addEventListener('click', function (event) {
            // Prevent the default form submission behavior
            event.preventDefault();
            
            // Call the calculateScores() function here
            
            // Moveto submitForm()
            submitForm();
            window.location.href = "{{ route('testvalidation1') }}";
        });
    });
</script>

<script>
    function submitForm() {
        calculateScores();
        calculateScoresMinat();    
        calculateScoresBakat();    
        fetch('/store-data-in-session', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            body: JSON.stringify({ questionData })
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
        })
        .catch(error => {
            console.error('Error storing data in session:', error);
        });
    }

</script> --}}

<script>
    // Ini Script Untuk Hitung calculate kepribadian
    const scoreEM1 = document.querySelector('input[name="answer1"]:checked')?.value || 0;
    const scoreEM2 = document.querySelector('input[name="answer2"]:checked')?.value || 0;
    const scoreEM3 = document.querySelector('input[name="answer3"]:checked')?.value || 0;
    const scoreEM4 = document.querySelector('input[name="answer4"]:checked')?.value || 0;
    const scoreEM5 = document.querySelector('input[name="answer5"]:checked')?.value || 0;
    const scoreEM6 = document.querySelector('input[name="answer6"]:checked')?.value || 0;
    const scoreEM7 = document.querySelector('input[name="answer7"]:checked')?.value || 0;
    const scoreEM8 = document.querySelector('input[name="answer8"]:checked')?.value || 0;
    const scoreEM9 = document.querySelector('input[name="answer9"]:checked')?.value || 0;
    const scoreEM10 = document.querySelector('input[name="answer10"]:checked')?.value || 0;
    
    $resultEmotionalStability = parseInt(scoreEM1) + parseInt(scoreEM2) + parseInt(scoreEM3) + parseInt(scoreEM4)  + parseInt(scoreEM5) + parseInt(scoreEM6)  + parseInt(scoreEM7) + parseInt(scoreEM8)  + parseInt(scoreEM9) + parseInt(scoreEM10);

    const scoreE1 = document.querySelector('input[name="answer11"]:checked')?.value || 0;
    const scoreE2 = document.querySelector('input[name="answer12"]:checked')?.value || 0;
    const scoreE3 = document.querySelector('input[name="answer13"]:checked')?.value || 0;
    const scoreE4 = document.querySelector('input[name="answer14"]:checked')?.value || 0;
    const scoreE5 = document.querySelector('input[name="answer15"]:checked')?.value || 0;
    const scoreE6 = document.querySelector('input[name="answer16"]:checked')?.value || 0;
    const scoreE7 = document.querySelector('input[name="answer17"]:checked')?.value || 0;
    const scoreE8 = document.querySelector('input[name="answer18"]:checked')?.value || 0;
    const scoreE9 = document.querySelector('input[name="answer19"]:checked')?.value || 0;
    const scoreE10 = document.querySelector('input[name="answer20"]:checked')?.value || 0;
    
    $resultExtraversion = parseInt(scoreE1) + parseInt(scoreE2) + parseInt(scoreE3) + parseInt(scoreE4)  + parseInt(scoreE5) + parseInt(scoreE6)  + parseInt(scoreE7) + parseInt(scoreE8)  + parseInt(scoreE9) + parseInt(scoreE10);

    const scoreC1 = document.querySelector('input[name="answer21"]:checked')?.value || 0;
    const scoreC2 = document.querySelector('input[name="answer22"]:checked')?.value || 0;
    const scoreC3 = document.querySelector('input[name="answer23"]:checked')?.value || 0;
    const scoreC4 = document.querySelector('input[name="answer24"]:checked')?.value || 0;
    const scoreC5 = document.querySelector('input[name="answer25"]:checked')?.value || 0;
    const scoreC6 = document.querySelector('input[name="answer26"]:checked')?.value || 0;
    const scoreC7 = document.querySelector('input[name="answer27"]:checked')?.value || 0;
    const scoreC8 = document.querySelector('input[name="answer28"]:checked')?.value || 0;
    const scoreC9 = document.querySelector('input[name="answer29"]:checked')?.value || 0;
    const scoreC10 = document.querySelector('input[name="answer30"]:checked')?.value || 0;
    
    $resultConscien = parseInt(scoreC1) + parseInt(scoreC2) + parseInt(scoreC3) + parseInt(scoreC4)  + parseInt(scoreC5) + parseInt(scoreC6)  + parseInt(scoreC7) + parseInt(scoreC8)  + parseInt(scoreC9) + parseInt(scoreC10);

    const scoreA1 = document.querySelector('input[name="answer31"]:checked')?.value || 0;
    const scoreA2 = document.querySelector('input[name="answer32"]:checked')?.value || 0;
    const scoreA3 = document.querySelector('input[name="answer33"]:checked')?.value || 0;
    const scoreA4 = document.querySelector('input[name="answer34"]:checked')?.value || 0;
    const scoreA5 = document.querySelector('input[name="answer35"]:checked')?.value || 0;
    const scoreA6 = document.querySelector('input[name="answer36"]:checked')?.value || 0;
    const scoreA7 = document.querySelector('input[name="answer37"]:checked')?.value || 0;
    const scoreA8 = document.querySelector('input[name="answer38"]:checked')?.value || 0;
    const scoreA9 = document.querySelector('input[name="answer39"]:checked')?.value || 0;
    const scoreA10 = document.querySelector('input[name="answer40"]:checked')?.value || 0;
    
    $resultAgree = parseInt(scoreA1) + parseInt(scoreA2) + parseInt(scoreA3) + parseInt(scoreA4)  + parseInt(scoreA5) + parseInt(scoreA6)  + parseInt(scoreA7) + parseInt(scoreA8)  + parseInt(scoreA9) + parseInt(scoreA10);

    const scoreI1 = document.querySelector('input[name="answer41"]:checked')?.value || 0;
    const scoreI2 = document.querySelector('input[name="answer42"]:checked')?.value || 0;
    const scoreI3 = document.querySelector('input[name="answer43"]:checked')?.value || 0;
    const scoreI4 = document.querySelector('input[name="answer44"]:checked')?.value || 0;
    const scoreI5 = document.querySelector('input[name="answer45"]:checked')?.value || 0;
    const scoreI6 = document.querySelector('input[name="answer46"]:checked')?.value || 0;
    const scoreI7 = document.querySelector('input[name="answer47"]:checked')?.value || 0;
    const scoreI8 = document.querySelector('input[name="answer48"]:checked')?.value || 0;
    const scoreI9 = document.querySelector('input[name="answer49"]:checked')?.value || 0;
    const scoreI10 = document.querySelector('input[name="answer50"]:checked')?.value || 0;
    
    $resultIntellect = parseInt(scoreI1) + parseInt(scoreI2) + parseInt(scoreI3) + parseInt(scoreI4)  + parseInt(scoreI5) + parseInt(scoreI6)  + parseInt(scoreI7) + parseInt(scoreI8)  + parseInt(scoreI9) + parseInt(scoreI10);

    // Function to calculate and assign scores

    function calculateScores() {
        const scoreEM1 = document.querySelector('input[name="answer1"]:checked')?.value || 0;
        const scoreEM2 = document.querySelector('input[name="answer2"]:checked')?.value || 0;
        const scoreEM3 = document.querySelector('input[name="answer3"]:checked')?.value || 0;
        const scoreEM4 = document.querySelector('input[name="answer4"]:checked')?.value || 0;
        const scoreEM5 = document.querySelector('input[name="answer5"]:checked')?.value || 0;
        const scoreEM6 = document.querySelector('input[name="answer6"]:checked')?.value || 0;
        const scoreEM7 = document.querySelector('input[name="answer7"]:checked')?.value || 0;
        const scoreEM8 = document.querySelector('input[name="answer8"]:checked')?.value || 0;
        const scoreEM9 = document.querySelector('input[name="answer9"]:checked')?.value || 0;
        const scoreEM10 = document.querySelector('input[name="answer10"]:checked')?.value || 0;
        
        $resultEmotionalStability = parseInt(scoreEM1) + parseInt(scoreEM2) + parseInt(scoreEM3) + parseInt(scoreEM4)  + parseInt(scoreEM5) + parseInt(scoreEM6)  + parseInt(scoreEM7) + parseInt(scoreEM8)  + parseInt(scoreEM9) + parseInt(scoreEM10);

        const scoreE1 = document.querySelector('input[name="answer11"]:checked')?.value || 0;
        const scoreE2 = document.querySelector('input[name="answer12"]:checked')?.value || 0;
        const scoreE3 = document.querySelector('input[name="answer13"]:checked')?.value || 0;
        const scoreE4 = document.querySelector('input[name="answer14"]:checked')?.value || 0;
        const scoreE5 = document.querySelector('input[name="answer15"]:checked')?.value || 0;
        const scoreE6 = document.querySelector('input[name="answer16"]:checked')?.value || 0;
        const scoreE7 = document.querySelector('input[name="answer17"]:checked')?.value || 0;
        const scoreE8 = document.querySelector('input[name="answer18"]:checked')?.value || 0;
        const scoreE9 = document.querySelector('input[name="answer19"]:checked')?.value || 0;
        const scoreE10 = document.querySelector('input[name="answer20"]:checked')?.value || 0;
        
        $resultExtraversion = parseInt(scoreE1) + parseInt(scoreE2) + parseInt(scoreE3) + parseInt(scoreE4)  + parseInt(scoreE5) + parseInt(scoreE6)  + parseInt(scoreE7) + parseInt(scoreE8)  + parseInt(scoreE9) + parseInt(scoreE10);

        const scoreC1 = document.querySelector('input[name="answer21"]:checked')?.value || 0;
        const scoreC2 = document.querySelector('input[name="answer22"]:checked')?.value || 0;
        const scoreC3 = document.querySelector('input[name="answer23"]:checked')?.value || 0;
        const scoreC4 = document.querySelector('input[name="answer24"]:checked')?.value || 0;
        const scoreC5 = document.querySelector('input[name="answer25"]:checked')?.value || 0;
        const scoreC6 = document.querySelector('input[name="answer26"]:checked')?.value || 0;
        const scoreC7 = document.querySelector('input[name="answer27"]:checked')?.value || 0;
        const scoreC8 = document.querySelector('input[name="answer28"]:checked')?.value || 0;
        const scoreC9 = document.querySelector('input[name="answer29"]:checked')?.value || 0;
        const scoreC10 = document.querySelector('input[name="answer30"]:checked')?.value || 0;
        
        $resultConscien = parseInt(scoreC1) + parseInt(scoreC2) + parseInt(scoreC3) + parseInt(scoreC4)  + parseInt(scoreC5) + parseInt(scoreC6)  + parseInt(scoreC7) + parseInt(scoreC8)  + parseInt(scoreC9) + parseInt(scoreC10);

        const scoreA1 = document.querySelector('input[name="answer31"]:checked')?.value || 0;
        const scoreA2 = document.querySelector('input[name="answer32"]:checked')?.value || 0;
        const scoreA3 = document.querySelector('input[name="answer33"]:checked')?.value || 0;
        const scoreA4 = document.querySelector('input[name="answer34"]:checked')?.value || 0;
        const scoreA5 = document.querySelector('input[name="answer35"]:checked')?.value || 0;
        const scoreA6 = document.querySelector('input[name="answer36"]:checked')?.value || 0;
        const scoreA7 = document.querySelector('input[name="answer37"]:checked')?.value || 0;
        const scoreA8 = document.querySelector('input[name="answer38"]:checked')?.value || 0;
        const scoreA9 = document.querySelector('input[name="answer39"]:checked')?.value || 0;
        const scoreA10 = document.querySelector('input[name="answer40"]:checked')?.value || 0;
        
        $resultAgree = parseInt(scoreA1) + parseInt(scoreA2) + parseInt(scoreA3) + parseInt(scoreA4)  + parseInt(scoreA5) + parseInt(scoreA6)  + parseInt(scoreA7) + parseInt(scoreA8)  + parseInt(scoreA9) + parseInt(scoreA10);

        const scoreI1 = document.querySelector('input[name="answer41"]:checked')?.value || 0;
        const scoreI2 = document.querySelector('input[name="answer42"]:checked')?.value || 0;
        const scoreI3 = document.querySelector('input[name="answer43"]:checked')?.value || 0;
        const scoreI4 = document.querySelector('input[name="answer44"]:checked')?.value || 0;
        const scoreI5 = document.querySelector('input[name="answer45"]:checked')?.value || 0;
        const scoreI6 = document.querySelector('input[name="answer46"]:checked')?.value || 0;
        const scoreI7 = document.querySelector('input[name="answer47"]:checked')?.value || 0;
        const scoreI8 = document.querySelector('input[name="answer48"]:checked')?.value || 0;
        const scoreI9 = document.querySelector('input[name="answer49"]:checked')?.value || 0;
        const scoreI10 = document.querySelector('input[name="answer50"]:checked')?.value || 0;
        
        $resultIntellect = parseInt(scoreI1) + parseInt(scoreI2) + parseInt(scoreI3) + parseInt(scoreI4)  + parseInt(scoreI5) + parseInt(scoreI6)  + parseInt(scoreI7) + parseInt(scoreI8)  + parseInt(scoreI9) + parseInt(scoreI10);

        axios.post('/gotoValidationbakatminat', {
            resultEmotionalStability: $resultEmotionalStability,
            resultExtraversion: $resultExtraversion,
            resultConscien: $resultConscien,
            resultAgree: $resultAgree,
            resultIntellect: $resultIntellect
        })
        .then(function (response) {
            console.log("Yeeee"); // Log a success message
        })
        .catch(function (error) {
            console.error(error); // Log any errors
        });
        // Example: Display the scores in the console
        console.log("ScoreNeurotic: " + $resultEmotionalStability);
        console.log("ScoreExtraversion: " + $resultExtraversion);
        console.log("ScoreConscientiousness: " + $resultConscien);
        console.log("ScoreAgreeableness: " + $resultAgree);
        console.log("ScoreOpeness: " + $resultIntellect);
    }

    // Add an event listener to the Calculate button to trigger the calculation
    document.querySelector('#calculate-button').addEventListener('click', calculateScores);

    
</script>
<script>
    // Get the list of questions and navigation buttons
    const questionList = document.getElementById('question-list');
    const questionNumberInput = document.getElementById('question-number');
    const questionNumberSelect = document.getElementById('question-number');
    const goToQuestionButton = document.getElementById('go-to-question');
    const prevButton = document.querySelector('.prev-button');
    const nextButton = document.querySelector('.next-button');

    const submitButton = document.getElementById('submit-button');

    // Function to check if all radio buttons are selected
    // Select all <li> elements with the class "question" and convert them to an array
    // Function to check if all radio buttons are selected
    function checkAllRadioButtonsSelected() {
        let allSelected = true;

        questionsArray.forEach((question) => {
            const form = question.querySelector('form.answer-form');
            const selectedOption = form.querySelector('input[type="radio"]:checked');

            if (!selectedOption) {
                allSelected = false;
            }
        });

        return allSelected;
    }

    // Select all <li> elements with the class "question" and convert them to an array
    const questionsArray = Array.from(document.querySelectorAll('li.question'));

    // Add an event listener to each radio button
    questionsArray.forEach((question) => {
        const form = question.querySelector('form.answer-form');
        const radioInputs = form.querySelectorAll('input[type="radio"]');

        radioInputs.forEach((radioInput) => {
            radioInput.addEventListener('change', () => {
                // Check if all radio buttons are selected
                if (checkAllRadioButtonsSelected()) {
                    submitButton.removeAttribute('disabled');
                } else {
                    submitButton.setAttribute('disabled', 'disabled');
                }
            });
        });
    });
</script>


<script>
    const questionData = [];

    document.querySelectorAll('.question').forEach(questionElement => {
        const question = questionElement.querySelector('p').textContent;
        const radioInput = questionElement.querySelector('input[type="radio"]:checked');
        const score = radioInput ? parseInt(radioInput.value) : 0;

        questionData.push({ Question: question, Score: score });
    });

    // Add event listeners to radio inputs
    document.querySelectorAll('.radio-input').forEach((input, index) => {
        input.addEventListener('change', (event) => {
            // const question = event.target.getAttribute('data-question'); // Get the question from data attribute
            const question = event.target.closest('li').querySelector('p').textContent;
            const score = event.target.value;

            // Update or add the selected answer in the questionData array
            const existingQuestionIndex = questionData.findIndex(item => item.Question === question);
            if (existingQuestionIndex !== -1) {
                questionData[existingQuestionIndex].Score = score;
            } else {
                questionData.push({ Question: question, Score: score });
            }

            // Log the updated data (you can send it to the server as needed)
            console.log(questionData);
        });
    });

    const calculateScoreButton = document.querySelector('.calculate-score-button');

    document.getElementById('calculate-score').addEventListener('click', function () {
        fetch('/store-data-in-session', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            body: JSON.stringify({ questionData })
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);
        })
        .catch(error => {
            console.error('Error storing data in session:', error);
        });
        // const scores = {};

        // document.querySelectorAll('input[type="radio"]:checked').forEach(input => {
        //     const questionName = input.getAttribute('name');
        //     const tipe = input.closest('.question').getAttribute('data-tipe');
        //     const score = parseInt(input.value) || 0;

        //     if (!scores[tipe]) {
        //         scores[tipe] = 0;
        //     }

        //     scores[tipe] += score;
        // });

        // Send the questionData to the server
        // fetch('/append-to-csv', {
        //     method: 'POST',
        //     headers: {
        //         'Content-Type': 'application/json',
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //     },
        //     body: JSON.stringify({ questionData })
        // })
        // .then(response => response.json())
        // .then(data => {
        //     console.log(data.message);
        // })
        // .catch(error => {
        //     console.error('Error appending data to CSV:', error);
        // });

        // console.log(scores);
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
