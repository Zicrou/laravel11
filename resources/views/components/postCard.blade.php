@props(['post'])

<div class="card">
    {{-- Title --}}
    <h2 class="font-bold text-xl">{{ $post->title }}</h2>

    {{-- Author and Date --}}
    <div class="text-xs font-light mb-4">
        <span>Posted {{ $post->created_at->diffForHumans() }} Date by</span>
        <a href="href" class="text-blue-500 font-medium">USERNAME</a>
    </div>

    {{-- Body --}}
    <div class="text-sm">
        <p>{{ Str::words($post->body, 15) }}</p>
    </div>
    
</div>