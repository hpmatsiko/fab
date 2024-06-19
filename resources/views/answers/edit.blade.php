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
    <form action="{{ route('answers.update', $answer->id) }}" method="POST">
     @csrf
     @method('PUT')

     <label for="answer">Answer:</label>
     <input type="text" name="answer" id="answer" value="{{ $answer->answer }}" class="form-control">

     <label for="is_correct">Is Correct:</label>
     <input type="checkbox" name="is_correct" id="is_correct" {{ $answer->is_correct ? 'checked' : '' }}><br><br>

     <button style="background: #198754;border: none;color: darkgrey;border-radius: .7vh;margin-top:1vh;" type="submit" class="btn btn-primary">Update Answer</button>
  </form>
</div>
</div>

@include('admin/layouts/includes/footer') 

@endsection
