<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
    <h1>Decimal To {{ $to }}</h1>
    <form method="GET" action="/test/dec/{{ strtolower(substr($to,0,3)) }}">
        <input name="in" type="number" class="form-control" value="{{ $oldin }}" autofocus><br>
        {{ $to }}: {{ $result }}<br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>