<x-layout>
    <h1 class="title">Request a password reset email </h1>

    {{-- Session Messages --}}
    @if (session('status'))
        <x-flashMsg msg="{{ session('status') }}"/>
    @endif
    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('password.request')}}" method="post" x-data="formSubmit" @submit.prevent="submit">
            @csrf

            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" class ="input @error('email') ring-red-500 @enderror"  value="{{ old('email') }}">
            </div>
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror
            
            {{-- Submit Button --}}
            <button x-ref="btn" class="btn">Submit</button>

        </form>
    </div>
</x-layout>
