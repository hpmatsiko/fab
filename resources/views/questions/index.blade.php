
@extends('admin/layouts.common')
@section('title', 'Add Book Category')
@section('content')
@include('admin/layouts/includes/nav')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
 

 @if($questions->isEmpty())
        <div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4" style="color: darkgrey;">
 
           No any question found!
            </div>
        </div>

       


    </div>
</div>


@else
        <div class="col-sm-12 col-xl-12">
          <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
             <h6 style="color: darkgrey;" class="mb-4">Questions List</h6>

             <table border="1" class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th scope="col">Question</th>
                        <th scope="col">Type</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($questions as $index => $question)
                    <tr>
                        
                        <td  scope="row">{{ $index + 1 }})</td>
                        
                        <td  scope="row">{{ $question->question }}</td>
                        <td scope="row">{{ $question->type }}</td>
                        <td scope="row">
                            <!-- Update and Delete Question -->
                            <a class="btn btn-success btn-sm" style="margin-right: 2vh;color: darkgrey;" href="{{ route('questions.edit', $question->id) }}">Edit Question</a>
                            <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" style="color: darkgrey;" type="submit">Remove Question</button>
                            </form>
                            <br>

                            <!-- Display answers -->
                            <strong>Answers:</strong>
                            <ul>
                                @foreach($question->answers as $answer)
                                <li>
                                    {{ $answer->answer }} ({{ $answer->is_correct ? 'Correct' : 'Incorrect' }})
                                    <a  class="btn btn-success btn-sm" style="margin-right: 2vh;color: darkgrey;margin-top: 1vh;" href="{{ route('answers.edit', $answer->id) }}">Edit Answer</a>
                                    <form action="{{ route('answers.destroy', $answer->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" style="color: darkgrey;margin-top: 1vh;" type="submit">Remove Answer</button>
                                    </form>
                                </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
@endif
@include('admin/layouts/includes/footer') 

@endsection

