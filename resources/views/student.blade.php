<!DOCTYPE html>
<html>
<head>
    <title>Laravel Practice</title>
</head>
<body>

<form action="{{ url('/students') }}" method="post">
    @csrf
    Name: <input type="text" name="studentName">
    <input type="submit">
</form>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif


<form method="get" action="/students">
    <input type="hidden" name="show" value="1">
    <button type="submit">Show all students</button>
    @if($show)
        <ul>
            @foreach($students as $student)
                <li>{{ $student }}</li>
            @endforeach
        </ul>
    @elseif($show)
        <p>No Students Added</p>
    @endif
</form>





</body>
</html>
