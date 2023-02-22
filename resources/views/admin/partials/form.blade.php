<div class="container">
    <form action=" {{ route($route, $post->id) }} " method="POST">
        @csrf
        @method($method)
        <h5 class="mb-3">
        Author: <span class="fw-semibold">{{ Auth::user()->name }} </span>
        </h5>
        <div class="mb-3">
            <label class="form-label">Titolo</label>
            <input type="text" class="form-control" placeholder="add title" name="title" value="{{ old('title') ?? $post->title  }}">
        </div>
        
        <div class="mb-3">
            <label class="form-label">Testo</label>
            <textarea class="form-control" placeholder="Leave a content here" name="content">{{ $post->content ?? old('content') }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Data</label>
            <input type="date" class="form-control" placeholder="add date" name="post_date" value="{{ old('post_date') ?? $post->post_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
