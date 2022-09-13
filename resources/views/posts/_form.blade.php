
<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="{{ $post->title }}">
    @error('title')
         <small class="invalid-feedback">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image"  class="form-control
    @error('image') is-invalid @enderror" >
    @error('image')
         <small class="invalid-feedback">{{ $message }}</small>
     @enderror
     @if ($post->image)
     <img src=" {{ asset('uploads/posts/'.$post->image ) }}"  width="80">
     @endif

</div>

<div class="mb-3">
    <label>Content</label>
    <textarea id="mytextarea"  name="content" placeholder="Content" class="form-control @error('content') is-invalid @enderror" rows="5">{{ $post->content }}</textarea>
    @error('content')
    <small class="invalid-feedback">{{ $message }}</small>
     @enderror
</div>
