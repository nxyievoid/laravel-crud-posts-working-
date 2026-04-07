<!-- <x-app-layout>
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
</x-app-layout> -->
<x-app-layout>
    <h1 class="text-3xl mb-6" style="color:#f2d5ff;">Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title') <div style="color:#ff6ec7;">{{ $message }}</div> @enderror
        </div>
        <div class="mb-4">
            <label>Content:</label>
            <textarea name="content">{{ old('content') }}</textarea>
            @error('content') <div style="color:#ff6ec7;">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="pastel-goth-button">Post</button>
    </form>
</x-app-layout>