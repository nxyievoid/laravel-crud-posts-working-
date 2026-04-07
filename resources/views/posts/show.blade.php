<!-- <x-app-layout>
    <a href="{{ route('posts.index') }}">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
</x-app-layout> -->
<x-app-layout>
    {{-- Flash message --}}
    @if(session('success'))
        <div class="mb-4 p-4 rounded pastel-goth-box" style="background: linear-gradient(135deg, #6ef0ff, #ff6ec7); color: #1a1a1a;">
            {{ session('success') }}
        </div>
    @endif

    {{-- All Posts link augšā --}}
    <div class="mb-6">
        <a href="{{ route('posts.index') }}" class="pastel-goth-button">All Posts</a>
    </div>

    {{-- Post kastīte --}}
    <div class="pastel-goth-box">
        <h1 class="text-3xl mb-4">{{ $post->title }}</h1>
        <p class="mb-6">{{ $post->content }}</p>

        {{-- Edit un Delete pogas kastē --}}
        <div class="flex gap-2">
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
</x-app-layout>