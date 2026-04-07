<x-app-layout>
    <h1>Edit Post</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input 
                type="text" 
                id="title" 
                name="title" 
                value="{{ old('title', $post->title) }}"
            >
            @error('title')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea 
                id="content" 
                name="content"
            >{{ old('content', $post->content) }}</textarea>
            @error('content')
                <div style="color:red">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" value="Update Post">
    </form>
</x-app-layout>