<div class="container">
    <form action=" {{ route($route, $post->id) }} " method="POST">
        @csrf
        @method($method)
        <div class="mb-3">
            <label class="form-label">title</label>
            <input type="text" class="form-control" placeholder="add title" name="title" value="{{ old('title') ?? $post->title  }}">
        </div>
        <div class="mb-3">
            <label class="form-label">author</label>
            <input type="text" class="form-control" placeholder="add author" name="author" value="{{ old('author') ?? $comic->author }}">
        </div>
        <div class="mb-3">
            <label class="form-label">content</label>
            <textarea class="form-control" placeholder="Leave a content here" name="content">{{ $post->content ?? old('content') }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">post_date</label>
            <input type="date" class="form-control" placeholder="add date" name="post_date" value="{{ old('post_date') ?? $comic->post_date }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
