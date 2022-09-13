<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Update Post</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body>


    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">

            <h1>Update Post {{ $post->id }} </h1>
            {{-- @include('forms.errors') --}}

            <a href="{{ route('posts.index') }}" class="btn btn-dark px-5" >All Posts</a>
        </div>



        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('posts._form')

        <div class="text-center">
            <button class="btn btn-info w-25 mb-5">Update </button>
        </div>


        </form>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
      </script>
</body>

</html>
