@extends('user.common')
@section('title','Home Page')
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div style="" class="row g-4">
        	{{-- <h4 style="text-transform: uppercase;">{{ $category->book_category }} - {{ $subCat->sub_category }}</h4>
        	
            <h5><span style="color: blue;">{{ $book->bname }}</span> - <span style="color: red;">{{ $levels->level }}</span></h5> --}}

            <div class="col-lg-4 col-sm-0 wow fadeInUp bg-white shadow" data-wow-delay="0.7s" style="word-break: break-all;">
                <div class="service-item text-center pt-3">
                    <div class="p-4" style="text-align: left;">

                        <h3 class="alert alert-success" style="text-transform: uppercase;">
                            {{-- <span>{{ $category->book_category }}</span> -  --}}
                            <span style="font-weight: 1000;">{{ $book->bname }}</span>
                        </h3>

                        <h4 class="alert alert-success">
                            <span style="font-weight: 1000;border-radius: 100vh;padding: 1vh;margin-top: 20vh">{{ $levels->level }}</span>
                        </h4>

                        @if ($chapters->isEmpty())
                        <p>No chapters in this book.</p>
                        @else
                        @foreach ($chapters as $chapter)
                        <h5 style="line-height: 5vh;">{{ $chapter->chapter }}</h5>
                        @endforeach
                        @endif
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-sm-12 wow fadeInUp bg-white shadow" data-wow-delay="0.7s" style="word-break: break-all;">
                @if ($firstChapter)
                <div class="service-item text-center pt-3">
                    <div class="p-4" style="text-align: left;">
                        <h3 class="alert alert-success">Chapter: {{ $firstChapter->chapter }}</h3>
                        @if ($notes->isEmpty())
                        <p>No notes in this chapter.</p>
                        @else

                        @foreach ($notes as $note)
                        <a class="boh" href="{{ route('login') }}" style="padding: 4vh;">
                           {!! $note->note !!}
                       </a>
                       @endforeach

                       @endif
                       @php
                      // Ensure $exercises is a query builder instance
                       $ChapterExercises = \App\Models\ExerciseModel::where('chapter_id', $firstChapter->id)->get();
                       @endphp
                       
                       @foreach ($ChapterExercises as $exercise)
                       <div>
                        <h3 class="alert alert-success">{{ $exercise->ex}}</h3>
                        @php
                      // Ensure $exercises is a query builder instance
                        $ExerciseQuestions = \App\Models\Question::where('ex_id', $exercise->id)->get();
                        @endphp

                        <form id="exam-form" action="{{ route('exam.submit') }}" method="POST">
                            @csrf
                            <ol>
                                @foreach ($ExerciseQuestions as $question)
                                <div>

                                    <li><h5>{{ $question->question }}</h5>
                                        @if ($question->type == 'single')
                                        @php
                      // Ensure $exercises is a query builder instance
                                        $QuestionAnswers = \App\Models\Answer::where('question_id', $question->id)->get();
                                        @endphp
                                        @foreach ($QuestionAnswers as $answer)
                                        <label>
                                            <input type="radio" name="answers[{{ $question->id }}]" value="{{ $answer->id }}">
                                            {{ $answer->answer }}
                                        </label><br>

                                        @endforeach

                                        @elseif ($question->type == 'multiple')

                                        @foreach ($question->answers as $answer)

                                        <label>
                                            <input type="checkbox" name="answers[{{ $question->id }}][]" value="{{ $answer->id }}">
                                            {{ $answer->answer }}
                                        </label><br>
                                    </li>
                                    @endforeach
                                
                                @endif

                            </div>
                            
                            @endforeach
                            </ol>
                            <button style="background: #06BBCC;border: none;padding: 1vh;border-radius: 1vh;color: ghostwhite;border: none;margin-top: 2vh;" type="submit">Submit</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
            @else
            <p>No chapters available for this book.</p>
            @endif
        </div>

    </div>
</div>
</div>
@endsection