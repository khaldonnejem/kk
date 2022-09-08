<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Send Gmail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

      <div class="containter mt-5">
        <h1>Basic Form</h1>
        <form method="post" action="{{ route('send_gmail') }}">

            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" placeholder="Email" class="form-control" name="email"/>
            </div>

            <div class="mb-3">
                {{-- <label>Message</label>
                <textarea placeholder="message" class="form-control" name="message" rows="5"></textarea> --}}

            <div class="text-center">
                <button class="btn btn-dark w-25">send</button>
            </div>

        </form>
      </div>
    </div>

  </body>
</html>
