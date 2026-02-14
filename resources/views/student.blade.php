<!DOCTYPE html>
<html>
<head>
    <title>Laravel Practice</title>
</head>
<body>

<form action="{{ url('/name') }}" method="get">
    Name: <input type="text" name="name">
    Style: <input type="text" name="style">
    <input type="submit">
</form>

@if($styleType)
    <h2>{{ $styleType }}</h2>
@endif

</body>
</html>
