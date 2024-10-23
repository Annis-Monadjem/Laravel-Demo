<x-postsLayout>
    <div class="edit-post">
        <form action="/posts/{{ $post->id }}" method="post">
            @csrf
            @method('put')
            <h1>Edit post</h1>
            <a href="/">x</a>
            <textarea autofocus name="content">{{ old('content', $post->content) }}</textarea>
            <button>Edit your post</button>
        </form>
    </div>
</x-postsLayout>
