<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
</head>
<body>

    <h1>Job List</h1>
    <p>IT jobs available.</p>

    <hr>

    @foreach ($jobs as $job)

        <h2>{{ $job->title }}</h2>

        <p>Salary: {{ $job->salary }}</p>

        <a href="{{ route('jobs.show', $job->id) }}">
            View Details
        </a>

        <hr>

    @endforeach

</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List</title>
</head>
<body>

    <h1>Job List</h1>
    <p>IT jobs available.</p>

    <hr>

    @foreach ($jobs as $job)

        <h2>{{ $job->title }}</h2>

        <p>Salary: {{ $job->salary }}</p>

        <a href="{{ route('jobs.show', $job->id) }}">
            View Details
        </a>

        <hr>

    @endforeach

</body>
</html>