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
        <!-- Status -->
            <!-- <form action="{{ route('posts.status', $post) }}" method="POST" class="inline">
                @csrf
                @method('patch') -->

                <!-- <select name="status">
                    <option value="draft">Draft</option>
                    <option value="publish">Publish</option>
                </select> -->
                <!-- <select name="status">
                    <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="publish" {{ $post->status == 'publish' ? 'selected' : '' }}>Publish</option>
                </select>

                <button type="submit" class="pastel-goth-button  text-sm px-3 py-1">
                    Status
                </button>
            </form> -->
                <form action="{{ route('posts.status', $post) }}" method="POST" class="inline">
                @csrf
                @method('PATCH')

                <select name="status" class="border rounded px-2 py-1">
                    <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="publish" {{ old('status', $post->status) == 'publish' ? 'selected' : '' }}>Publish</option>
                    <!-- <option value="archived" {{ old('status', $post->status) == 'archived' ? 'selected' : '' }}>Archived</option> -->
                </select>

                <button type="submit" class="pastel-goth-button text-sm px-3 py-1">
                    Update Status
                </button>
            </form>

            {{-- Pievienojam kļūdu paziņojumu, lai redzētu, ja validācija neizdodas --}}
            @error('status')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>
    </div>
</x-app-layout>