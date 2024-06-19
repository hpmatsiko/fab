@extends('user.common')
@section('title','Home Page')
@section('content')
<div class="col-lg-12 col-sm-12 bg-white shadow wow fadeInUp" data-wow-delay="0.3s" style="word-break: break-all;">
   <div class="service-item text-center pt-3" >
    <div class="p-4" style="text-align: left;">
        @if (session('message'))
        <p>{{ session('message') }}</p>
        @endif

        <form id="exam-form" action="{{ route('exam.submit') }}" method="POST">
            @csrf
            <ol>
                @foreach ($questions as $question)
                <div>

                    <li><h5>{{ $question->question }}</h5>
                        @if ($question->type == 'single')

                        @foreach ($question->answers as $answer)
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
                </ol>
                @endif
            </div>
            @endforeach
            <button style="background: #06BBCC;border: none;padding: 1vh;border-radius: 1vh;color: ghostwhite;border: none;margin-top: 2vh;" type="submit">Submit</button>
        </form>
    </div>
</div>
</div>

@endsection

