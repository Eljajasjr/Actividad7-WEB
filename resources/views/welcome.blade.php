<!DOCTYPE html>
<html>
<head>
    <title>Cursos</title>
</head>
<body>
    <h1>Cursos de Robótica</h1>
    @foreach ($courses as $course)
        <p>{{ $course->course_name }}</p>
    @endforeach
</body>
</html>