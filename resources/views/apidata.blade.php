<!DOCTYPE html>
<html>
<head>
    <title>Show IDs</title>
</head>
<body>
    <h1>List of IDs</h1>

    
    
    <ul>

    @foreach($ids as $id)
            <li>{{ $id }}</li>
        @endforeach
    </ul>

</body>
</html>
