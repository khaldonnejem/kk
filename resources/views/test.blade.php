<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body>
    <div class="container mt-5 ">

        <h1 class="mb-4 row">All Projects</h1>

        {{-- <h1> {{ $name }}</h1>
            <p>{{$text}}</p> --}}
        <h4>All Sites</h4>
        <a href="{{ route('form') }}" class="btn btn-dark px-5 mb-5">All Sites</a>

        <h4>All Forms</h4>
        <a href="{{ route('form') }}" class="btn btn-dark px-5 mb-5">All Forms</a>

        <h4>All Mails</h4>
        <a href="{{ route('form') }}" class="btn btn-dark px-5 mb-5">All Mails</a>
        <h4>All Mails</h4>
        <a href="{{ route('form') }}" class="btn btn-dark px-5 mb-5">All Mails</a>

        <h4>All Posts</h4>
        <a href="{{ route('posts.index') }}" class="btn btn-dark px-5 mb-5">All Posts</a>

    </div>




</body>

</html>
