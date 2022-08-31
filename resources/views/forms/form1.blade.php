<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

      <div class="containter mt-5">
        <h1>Basic Form</h1>
        <form method="post" action="{{ route('form1') }}">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
            {{-- {{ csrf_field() }} --}}
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" placeholder="Name" class="form-control" name="name"/>
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="number" placeholder="Age" class="form-control" name="age"/>
            </div>
            <div class="text-center">
                <button class="btn btn-dark w-25">send</button>
            </div>
            {{-- <button class="btn btn-info">send</button> --}}
            {{-- <button class="btn btn-danger">send</button> --}}
            {{-- <button class="btn btn-success">send</button> --}}
            {{-- <button class="btn btn-default">send</button> --}}
            {{-- <button class="btn btn-primary">send</button> --}}
            {{-- <button class="btn btn-warning">send</button> --}}
            {{-- <h1>dd</h1>
            <span>aa</span>
            <b>aa</b> --}}
            {{-- Dont use these tags:{{
            <del>del</del>
            <mark>mark</mark>
            <big>big</big>
            <center>center</center>
            }} --}}
        </form>
      </div>

  </body>
</html>
