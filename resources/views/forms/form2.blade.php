<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

      <div class="container mt-5">
        <h1>Information Form</h1>
        <form action="{{ route('form2_data') }}" method="post">
        @csrf
        <input type="text" placeholder="Name" name="name" class="form-control mb-3">
        <input type="email" placeholder="Email" name="email"
        class="form-control mb-3">
        <input type="password" placeholder="Password" name="password"
        class="form-control mb-3" autocomplete="new-password">
        <input type="number" placeholder="Age" name="age" class="form-control mb-3">
        <button class="btn btn-success w-100 mb-4">Send</button>
         </form>
      </div>
      <div class="text-center">
        <a href="{{ route('form') }}" class="btn btn-dark w-25" >Back</a>
    </div>

  </body>
</html>
