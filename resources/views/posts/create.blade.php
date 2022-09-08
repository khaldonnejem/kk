<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body>


    <div class="containter mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Add New Post</h1>

            <a href="{{ route('posts.index') }}" class="btn btn-dark px-5" >All Posts</a>
        </div>



        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" placeholder="Title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image"  class="form-control" >
        </div>

        <div class="mb-3">
            <label>Content</label>
            <textarea  name="content" placeholder="Content" class="form-control" rows="5"></textarea>
        </div>


        <div class="text-center">
            <button class="btn btn-success w-25">Add</button>
        </div>


        </form>

    </div>

</body>

</html>
