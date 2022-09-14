<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navigation {
            position: fixed;
            top: 45%;
            width: 40px;
            height: 40px;
            /* background: #f00; */
            border-radius: 50%;
            transition: all .3s ease;
        }

        .navigation:hover {
            transform: scale(1.8);
        }

        .navigation img {
            width: 100%;
            height: 100%;
            border-radius: 50%
        }

        .navigation.prev {
            left: 40px;
        }

        .navigation.next {
            right: 40px;

        }

        .navigation .arrow {
            position: absolute;
            top: 5;
            left: 0;
            width: 100%;
            height: 100%;
            /* background: rgba(0,0,0,0.386); */
            /* border-radius: 50%; */
            font-size: 18px;
            /* font-family: cursive; */
            font-family: monospace;
            display: flex;
            /* justify-content: center;
            align-items: center; */
            color: rgb(0, 0, 0);
        }

        /* this style is for arrow pattern <   >
        /* .navigation .arrow {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.386);
            border-radius: 50%;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(255, 255, 255);
        } */

    </style>
    <style>
        a.btn {
            position: fixed;
            top: 8%;
            /* width: 40px;
            height: 40px; */
            font-size: 1em;
            text-align: left;
            padding: 0.4em 1.4em;
            border-radius: 4em;
            cursor: pointer;
            /* font-family: 'Montserrat', sans-serif; */
            font-family: 'Montserrat', cursive;
            font-weight: 600;
            border: 0;
            color: WHITE;
            line-height: 1.6em;
            transition: background-color 300ms ease-in-out;


        }
    </style>
</head>

<body>

    @if($next)

    <a href="{{ route('mypost',$next->id) }}" class="navigation next">
        <img src="{{ asset('uploads/posts/' . $next->image) }}" alt="">
        <div class="arrow">next</div>
    </a>

    @endif

    @if($prev)

    <a href="{{ route('mypost',$prev->id) }}" class="navigation prev">
        <img src="{{ asset('uploads/posts/' . $prev->image) }}" alt="">
        <div class="arrow">prev</div>
    </a>
    @endif



    <div class=" container my-5">
    <a href="{{ route('posts.index') }}" class="btn btn-dark px-5" >All Posts</a>
    </div>
        <div class="container text-center my-5">
        <h1>{{ $post->title }}</h1>
        {{-- <div class="d-flex justify-content-end align-items-center mb-4"> --}}

        {{-- <a href="{{ route('posts.index') }}" class="btn btn-dark px-5" >All Posts</a> --}}
        {{-- </div> --}}
        <img class="w-50" src="{{ asset('uploads/posts/' . $post->image) }}" alt="">
        {{-- <div>{{ $post->content }}</div> --}}
        <div>
            {!! $post->content !!}
        </div>
        <h4 class="mb-4">All Comments({{ $post->comments->count() }})</h4>

        <div class="row  justify-content-center ">
            <div class="col-md-8">
                @foreach ($post->comments as $comment)
                    <div class="text-start">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6>{{ $comment->user->name }}</h6>
                            <small>{{ $comment->created_at->diffForHumans() }}</small>
                        </div>
                        <p>{{ $comment->comment }}</p>

                    </div>
                    @if (!$loop->last)
                        <hr>
                    @endif
                @endforeach

                <h5>Add New Comment</h5>
                <form action="{{ route('one_to_many_data') }}" method="POST">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <textarea class="form-control mb-3" rows="5" placeholder="Type your comment here.." name="comment"></textarea>
                    <button class="btn btn-success">Comment</button>
                </form>
            </div>

        </div>

    </div>

</body>

</html>
