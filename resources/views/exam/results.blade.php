<div class="container">
    <h1>Exam Results</h1>
    <p>{{ session('message') }}</p>

    <h2>Your Answers</h2>
    <ul>
        @foreach ($results as $result)
            <li>
                Question: {{ $result->question->question }} <br>
                Your Answer: {{ $result->answer ? $result->answer->answer : 'No Answer' }} <br>
                Correct: {{ $result->is_correct ? 'Yes' : 'No' }}
            </li>
        @endforeach
    </ul>
</div>