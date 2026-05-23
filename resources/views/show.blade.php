<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $job->title }}</title>
</head>
<body>
    <h1>{{ $job->title }}</h1>
    <p>{{ $job->salary }}</p>
    <p>{{ $job->description }}</p>
   
     <a href="{{ route('jobs.index') }}">Back to job list</a>
</body>
</html>