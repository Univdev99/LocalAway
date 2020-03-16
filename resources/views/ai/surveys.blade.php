<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
    <link href="/images/favicon-32x32.png" rel="icon" rel="icon" type="image/png" sizes="32x32" />
    <title>Go Survey</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/newlanding/survey/survey.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/59286bb0a9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid m-0 p-0">
                <h2 id="title" class="row justify-content-center font-weight-bold d-none" style="opacity:0;"></h2>
            <form action="/survey" method="post" class="wizard-container" id='survey-form'>
            {{ csrf_field() }}
                <input id="person_id" val="{{ $person_id }}" type="hidden">
                <input id="question_count" val="{{ count($question_list) }}" type="hidden">
                <div class="wizard-body" style="top: 0">
                    <div class="item item-show row start-part">
                        <div class="col-lg-4 text-center">
                            <img src="/images/newlanding/logo.png" alt="logo" width="100">
                            <p class="h5 mt-3 text-secondary">Tell us more about your preferences and we’ll send you what you need.</p>
                            <button class="btn-circle my-3 item-button justify-content-center" id="start-button" type="button">Start</button>
                            <div class="arrow-btn">Press <strong>Enter</strong>
                                <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    @if (count($question_list) > 0)
                        @foreach($question_list as $question_item)
                            <div class="item row">
                                <div class="col-lg-6">
                                    <div class="question">
                                        <span class="h3">
                                            <i class="fa fa-long-arrow-right arrow2 m-0" aria-hidden="true"></i>
                                            {{ $question_item['question_text'] }}<br>
                                        </span>
                                        @if ($question_item['question_type'] == 'multiple')
                                            <p class="color-brown mt-4">Choose as many as possible</p>
                                        @endif
                                    </div>
                                    <div class="answers mt-4">
                                        @foreach($question_item['answers'] as $answer)
                                            @if ($question_item['question_type'] == 'multiple')
                                                <input type="checkbox"  id="{{ $answer['answer_id'] }}" name="{{ $question_item['question_id'] }}">
                                            @elseif ($question_item['question_type'] == 'single')
                                                <input type="radio"  id="{{ $answer['answer_id'] }}" name="{{ $question_item['question_id'] }}">
                                            @else
                                                <input type="text" class="text-answer" id="{{ $answer['answer_id'] }}" name="{{ $question_item['question_id'] }}" value="" placeholder = "Type your answer here..." >
                                            @endif
                                            @if ($question_item['question_type'] != 'input')
                                                @if ($answer['answer_text'] == 'Other')
                                                    <label for="{{ $answer['answer_id'] }}" class="answer d-flex other">
                                                @else
                                                    <label for="{{ $answer['answer_id'] }}" class="answer d-flex">
                                                @endif
                                                    <div class="character ">
                                                        <span>✓</span>
                                                    </div>
                                                    <div class="answer-body">
                                                        <span>{{ $answer['answer_text'] }}</span>
                                                        @if ($answer['answer_text'] == 'Other')
                                                            <input type="text" class="hidden-text" style="display: none;" name="{{ $question_item['question_id'] }}">
                                                        @endif
                                                    </div>
                                                </label>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="arrow-btn" style="opacity:0;">
                                        <a class="btn btn-primary ok-button">OK</a>
                                        Press <strong>Enter</strong>
                                        <i class="fa fa-long-arrow-down arrow1" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="item row end-part">
                        <div class="col-lg-4 text-center">
                            <img src="/images/newlanding/logo.png" alt="logo" width="100">
                            <p class="h5 mt-3 text-secondary">Thank you for your answer.</p>
                            <button type="submit" class="btn-circle my-3 item-button justify-content-center">Submit</a>
                        </div>
                    </div>
                </div>
            </form>

            <div class="navigation-bar d-flex" style="opacity:0;">
                <div id="myProgress">
                    <div id ="pagination">1/{{ count($question_list) + 1 }}</div>
                    <div id="myBar"></div>
                </div>
                <button class="btn btn-primary prev-button mx-2">Prev</button>
                <button class="btn btn-primary next-button">Next</button>
            </div>

        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="/js/survey/survey.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
</html>
