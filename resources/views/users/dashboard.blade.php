<x-layout>
    <h1 class="title">Hello {{ auth()->user()->username}} </h1>

    <div class="mx-auto max-w-screen-sm card mt-0" style="margin-top:-3rem;">
        {{-- Create Post Form --}}
        <div class="card mb-4">
            <h2 class="font-bold mb-4">Create a new post</h2>
            
            {{-- Session Messages --}}
            @if (session('success'))
                <div>
                    <x-flashMsg msg="{{ session('success') }}"/>
                </div>  
            @endif
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
    
                {{-- Post Title --}}
                <div class="mb-4">
                    <label for="title">Post Title</label>
                    <input type="text" name="title" class="input @error('title') ring-red-500 @enderror"  value="{{ old('title') }}">
                </div>
                @error('title')
                    <p class="error">{{ $message }}</p>
                @enderror

                {{-- Post Body --}}
                <div class="mb-4">
                    <label for="body">Post Content</label>
                    <textarea name="body" rows="5" class ="input @error('body') ring-red-500 @enderror">{{ old('body') }}</textarea>
                </div>
                @error('body')
                    <p class="error">{{ $message }}</p>
                @enderror

                {{-- Submit Button --}}
            <button class="btn">Create</button>
            </form>
        </div>
    </div>

    {{-- User Posts --}}
    <h2 class="font-bold mb-4">Your Latest Posts</h2>
    <div class="grid grid-cols-2 gap-6">
        @foreach ($posts as $post)
        <x-postCard :post="$post" />      
        @endforeach
    </div>
</x-layout>