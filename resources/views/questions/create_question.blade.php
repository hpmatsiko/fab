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
       <!-- Display Success Message -->
       @if(session('suc'))
       <div class="alert alert-success">
        {{ session('suc') }}
    </div>
    @endif
    <form action="{{ route('exam.storeQuestion') }}" method="POST">
        @csrf
        
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
        <div>
            <label>Question:</label>
            <input type="hidden" name="ex_id" value="{{ $exercise->id }}" placeholder="">
            <textarea name="question" class="form-control" rows="5" required></textarea>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
                <label>Type:</label>
                <select name="type" required class="form-control">
                    <option value="single">Single Answer</option>
                    <option value="multiple">Multiple Answers</option>
                </select>
            </div>
        </div>
        <div id="answers" class="row mb-3">
            <div class="col-sm-12">
                <label>Answer:</label>
                <input type="text" name="answers[0][answer]" class="form-control" required>
                <label>Correct:</label>
                <input type="checkbox" name="answers[0][is_correct]" value="1">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-12">
                <button type="button" style="background: #198754;border: none;color: darkgrey;margin-right:4vh;padding: 1vh;border-radius: .7vh;" class="" onclick="addAnswer()">Add Another Answer</button>
                <button style="background: #198754;border: none;color: darkgrey;border-radius: .7vh;" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</div>

<script>
    let answerCount = 1;
    function addAnswer() {
        const answersDiv = document.getElementById('answers');
        const newAnswerDiv = document.createElement('div');
        newAnswerDiv.classList.add('col-sm-12', 'mt-3'); // Add classes for consistent styling
        newAnswerDiv.innerHTML = `

        <label>Answer:</label>
        <input type="text" name="answers[${answerCount}][answer]" class="form-control" required>


        <label style="margin-right:1vh;">Correct:</label>
        <input style="margin-right:3vh;" type="checkbox" name="answers[${answerCount}][is_correct]" value="1">
        <button type="button" style="border: none;color: darkgrey;margin-top:1vh;" class="btn btn-danger btn-sm" onclick="removeAnswer(this)">Close</button>
    </div>
    `;
    answersDiv.appendChild(newAnswerDiv);
    answerCount++;
}

function removeAnswer(button) {
    const answerDiv = button.parentElement;
    answerDiv.remove();
}
</script>
@include('admin/layouts/includes/footer') 

@endsection
