<x-postsLayout>
    <div class="posts-list">
        <h2>Posts List</h2>
        <a href="/" class="home">Home</a>
        <ol class="posts">
            @forelse ($posts as $post)
                <li>
                    @if ($post->user->id === auth()->user()->id)
                        <a title="Edit your post" class="edit-post" href="/posts/{{ $post->id }}/edit">
                            <span class="content">
                                {{ $post->content }}
                            </span>
                        </a>
                        <br>
                        <br>
                        <div>
                            <span>({{ $post->updated_at->diffForHumans() }} by </span>
                            <span class="name" style="font-style:italic">
                                {{ $post->user->firstname }} {{ $post->user->lastname }})
                            </span>
                            <form action="/posts/{{ $post->id }}" method="post" class="delete">
                                @csrf
                                @method('delete')
                                <button><small>[Delete]</small></button>
                            </form>
                        </div>
                    @else
                        <span class="content">
                            {{ $post->content }}
                        </span>
                        <br>
                        <br>
                        <div>
                            <span>({{ $post->updated_at->diffForHumans() }} by </span>
                            <span class="name" style="font-style:italic">
                                {{ $post->user->firstname }} {{ $post->user->lastname }})
                            </span>
                        </div>
                    @endif
                </li>
            @empty
                <p>No posts</p>
            @endforelse
        </ol>
    </div>
</x-postsLayout>
