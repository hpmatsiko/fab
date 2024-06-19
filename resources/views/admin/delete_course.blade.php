<!DOCTYPE html>
<html>
<head>
    <title>Delete Course for Teacher</title>
</head>
<body>
    <h1>Delete Course for Teacher</h1>
    <form action="/delete-course" method="POST">
        @csrf
        <input type="hidden" name="teacher_id" value="{{ $teacher->id }}">
        <input type="hidden" name="course_id" value="{{ $product->id }}">

        <p>Are you sure you want to delete the course "{{ $product->bname }}" for teacher "{{ $teacher->fname }}"?</p>
        <button type="submit">Delete Course</button>
    </form>
</body>
</html>
