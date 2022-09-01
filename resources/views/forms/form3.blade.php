<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

      <div class="containter mt-5">
        <h1>Types Form</h1>
        {{-- @dump($errors)
        @dump($errors->any())
        @dump($errors->all()) --}}
       @include('forms.errors')
        <form method="post" action="{{ route('form3') }}">

            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" />
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" placeholder="Email" class="form-control @error('email') is-invalid
                @enderror" name="email"/>
                @error('email')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
            </div>
            <div class="text-center">
                <button class="btn btn-dark w-25">send</button>
            </div>

        </form>
      </div>

  </body>
</html>
