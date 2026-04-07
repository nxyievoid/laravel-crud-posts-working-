<!-- <x-app-layout>
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <ul>
        @foreach($posts as $post)
            <li>
                <h2>Title: {{ $post->title }}</h2>
                <p>Content: {{ $post->content }}</p>
                <div>
                    <a href="{{ route('posts.show', $post) }}">Show</a>
                    <a href="{{ route('posts.edit', $post) }}">Edit</a>
                    <br>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this post?')">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout> -->
<x-app-layout>
    {{-- Flash message --}}
    @if(session('success'))
        <div class="mb-4 p-4 rounded pastel-goth-box" style="background: linear-gradient(135deg, #6ef0ff, #ff6ec7); color: #1a1a1a;">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl" style="color:#f2d5ff;">All Posts</h1>
        <a href="{{ route('posts.create') }}" class="pastel-goth-button">Create Post</a>
    </div>

    @foreach($posts as $post)
        <div class="pastel-goth-box">
            <h2 class="text-2xl mb-2">{{ $post->title }}</h2>
            <p class="mb-4">{{ $post->content }}</p>
            <div class="flex gap-2">
                <a href="{{ route('posts.show', $post) }}" class="pastel-goth-button">Show</a>
                <a href="{{ route('posts.edit', $post) }}" class="pastel-goth-button">Edit</a>

                <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="pastel-goth-button delete-button text-sm px-3 py-1" onclick="return confirm('Are you sure?')">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</x-app-layout>