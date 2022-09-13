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

    <h1>All Forms</h1>
    <div class="container mt-5">
    <ul class="list-group">
        {{-- <li class="list-group-item active" aria-current="true">An active item</li> --}}
        <li class="list-group-item">Basci Form</li>

        <a class="btn btn-danger btn-xl"  href="{{ url('form1') }}">
            <button class="btn btn-dark w-0 ">Form 1</button>
        </a>


        <li class="list-group-item">Information From</li>
        <a class="btn btn-primary btn-xl" href="{{ route('form2') }}"> <button class="btn btn-dark w-0 ">Form 2</button></a>

        <li class="list-group-item">Types Form</li>
        <a class="btn btn-danger  btn-xl" href="{{ route('form3') }}"> <button class="btn btn-dark w-0 ">Form 3</button></a>

        <li class="list-group-item">Register Form</li>
        <a class="btn btn-primary btn-xl" href="{{ route('form4') }}"> <button class="btn btn-dark w-0 ">Form 4</button></a>

        <li class="list-group-item">Uploade File Form</li>
        <a class="btn btn-danger  btn-xl" href="{{ route('form5') }}"> <button class="btn btn-dark w-0 ">Form 5    </button></a>

      </ul>
    </div>
</body>
</html>



