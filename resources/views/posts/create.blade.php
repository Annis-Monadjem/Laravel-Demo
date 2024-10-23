<x-postsLayout>
    <div class="create-post">
        <form action="/posts/store" method="post">
            @csrf
            <h1>Create post</h1>
            <a href="/">x</a>
            <textarea autofocus name="content" placeholder="What's on your mind?"></textarea>
            <button>Add to your post</button>
        </form>
    </div>
</x-postsLayout>
