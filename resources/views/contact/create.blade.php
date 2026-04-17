<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      {{-- Flash message --}}
    @if(session('success'))
        <div class="mb-4 p-4 rounded pastel-goth-box" style="background: linear-gradient(135deg, #6ef0ff, #ff6ec7); color: #1a1a1a;">
            {{ session('success') }}
        </div>
    @endif
      <!-- <div class="flex justify-between items-center mb-6">
        <a href="{{ route('posts.index') }}" class="pastel-goth-button">Go back</a>
    </div>  -->
        <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl" style="color:#f2d5ff;">Contact us! :></h1>
    </div>
    <form action="{{ route('contact.store') }}" method="POST" >
        @csrf
  <div >
    <label for="name">Enter your name: </label>
    <input type="text" name="name" id="name"  />
    @error('name') <div style="color:#ff6ec7;">{{ $message }}</div> @enderror
  </div>
  <div>
    <label for="email">Enter your email: </label>
    <input type="email" name="email" id="email"  />
    @error('email') <div style="color:#ff6ec7;">{{ $message }}</div> @enderror
  </div>
<div>
    <label for="email">Write you question: </label>
    <textarea type="question" name="question" id="question"></textarea>
    @error('question') <div style="color:#ff6ec7;">{{ $message }}</div> @enderror
  </div>
  <div>
    <input type="submit" value="Sumbit" />
  </div>
</form>
</body>
</html>
</x-app-layout>