<x-layout>
    <h1 class="title">Register a new account</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('register') }}" method="post" x-data="formSubmit" @submit.prevent="submit">
            @csrf
            {{-- Username --}}
            <div class="mb-4">
                <label for="username">Username</label>
                <input type="text" name="username" class ="input @error('username') ring-red-500 @enderror" value="{{ old('username') }}">
            </div>
            @error('username')
                <p class="error">{{ $message }}</p>
            @enderror

            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" class ="input @error('email') ring-red-500 @enderror"  value="{{ old('email') }}">
            </div>
            @error('email')
                <p class="error">{{ $message }}</p>
            @enderror

            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="text" name="password" class ="input @error('password') ring-red-500 @enderror">
            </div>
            @error('password')
                <p class="error">{{ $message }}</p>
            @enderror

            {{-- Confirm Password --}}
            <div class="mb-4">
                <label for="password_confirmation">Confirm Password</label>
                <input type="text" name="password_confirmation" class ="input @error('password_confirmation') ring-red-500 @enderror">
            </div>
            @error('password_confirmation')
                <p class="error">{{ $message }}</p>
            @enderror

            {{-- Submit Button --}}
            <button x-ref="btn" class="btn">Register</button>

        </form>
    </div>
</x-layout>
