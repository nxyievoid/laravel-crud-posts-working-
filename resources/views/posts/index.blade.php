<x-app-layout>
    <h1>All posts</h1>
    <a href="/posts/create">Create post</a>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('posts.show', ['id' => $post->id]) }}">Show</a>
                    <a href="{{ route('posts.edit', ['id' => $post->id]) }}">Edit</a>
                    <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
