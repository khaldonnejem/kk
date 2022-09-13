<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title>All Forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5 ">
    <h1>All Forms</h1>
    </div>
    <div class="container mt-5 ">

        <ul class="list-group list-group-flush">
            <h4>Basci Form</h4>
            <li class="list-group-item"></li>

            <a href="{{ url('form1') }}">
                <button class="btn btn-dark px-5 mb-4 ">Form 1</button>
            </a>

            <h4>Information From</h4>
            <li class="list-group-item"></li>
            <a href="{{ route('form2') }}"> <button class="btn btn-dark px-5 mb-4 ">Form 2</button></a>

            <h4>Types Form</h4>
            <li class="list-group-item"></li>
            <a href="{{ route('form3') }}"> <button class="btn btn-dark px-5 mb-4">Form 3</button></a>

            <h4>Register Form</h4>
            <li class="list-group-item"></li>
            <a href="{{ route('form4') }}"> <button class="btn btn-dark px-5 mb-4">Form 4</button></a>

            <h4>Uploade File Form</h4>
            <li class="list-group-item"></li>
            <a href="{{ route('form5') }}"> <button class="btn btn-dark px-5 mb-4">Form 5 </button></a>

        </ul>
    </div>
</body>

</html>
