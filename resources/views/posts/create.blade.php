<x-app-layout>
    <h1> Create post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div>
        <label>Title:</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label>Content:</label>
        <textarea name="content">{{ old('content') }}</textarea>
        @error('content')
            <div style="color:red">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Post</button>
    </form>
</x-app-layout>
