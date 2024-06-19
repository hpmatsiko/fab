@extends('admin/layouts.common')
@section('title', 'Add Question')
@section('content')
@include('admin/layouts/includes/nav')
<style type="text/css">
    #que {
        color: darkblue;
    } 
    #ques {
        background: #000000;
    } 
</style>
<div style="margin: 4vh 4vh 0vh 4vh;" class="col-sm-12 col-xl-10">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 style="color: darkgrey;" class="mb-4">Edit Question</h6>
        <!-- Display Success Message -->
        @if(session('suc'))
        <div class="alert alert-success">
            {{ session('suc') }}
        </div>
        @endif
        <form action="{{ route('questions.update', $question->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-sm-12">
                    <select id="locale" name="locale" class="form-control @error('locale') is-invalid @enderror">
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                        <option value="fr" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>French</option>
                        <option value="kin" {{ app()->getLocale() == 'kin' ? 'selected' : '' }}>Kinyarwanda</option>

                    </select>
                    @error('locale')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">

                <div class="col-sm-12">
                   <select class="form-control" name="chapter_id">
                    <option value=" 
                    @foreach($exercises as $exercise)
                    {{ $exercise->id }}
                    @endforeach
                    ">
                    @foreach($exercises as $exercise)
                    {{ $exercise->ex }}
                    @endforeach
                </option>

                @foreach($allexercises as $allex)
                <option value="{{ $allex->id }}">{{ $allex->ex }}</option>
                @endforeach
            </select>

        </div>
    </div>

    <label>Question:</label>
    <textarea name="question" id="question" class="form-control">{{ $question->question }}</textarea>

    <label for="type">Type:</label>
    <select name="type" id="type" class="form-control">
        <option value="single" {{ $question->type == 'single' ? 'selected' : '' }}>Single</option>
        <option value="multiple" {{ $question->type == 'multiple' ? 'selected' : '' }}>Multiple</option>
    </select>

    <button style="background: #198754;border: none;color: darkgrey;border-radius: .7vh;margin-top:1vh;" type="submit" class="btn btn-primary">Update Question</button>
</form>

<hr>

<h6 style="color: darkgrey;" class="mb-4">Answers</h6>
<ul>
    @foreach($question->answers as $answer)
    <li>
        {{ $answer->answer }} ({{ $answer->is_correct ? 'Correct' : 'Incorrect' }})
        <a style="background: #198754;border: none;color: darkgrey;border-radius: .7vh;" href="{{ route('answers.edit', $answer->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('answers.destroy', $answer->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-primary" style="border: none;color: darkgrey;margin-top:1vh;" type="submit">Remove</button>
        </form>
    </li>
    @endforeach
</ul>

<hr>

<h6 style="color: darkgrey;" class="mb-4">Add New Answer</h6>
<form action="{{ route('answers.store', $question->id) }}" method="POST">
    @csrf

    <label for="answer">Answer:</label>
    <input type="text" name="answer" id="answer" required class="form-control">

    <label for="is_correct">Is Correct:</label>
    <input type="hidden" name="is_correct" value="0">
    <input type="checkbox" name="is_correct" id="is_correct" value="1">

    <button style="background: #198754;border: none;color: darkgrey;border-radius: .7vh;margin-top:1vh;" type="submit" class="btn btn-primary">Add Answer</button>
</form>
</div>
</div>

@include('admin/layouts/includes/footer') 

@endsection

