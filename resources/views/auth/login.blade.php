<x-layout>
    <h1 class="title">Login</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('login') }}" method="post">
            @csrf

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

            {{-- Password --}}
            <div class="mb-4">
                <input type="checkbox" name="remember" id ="remember">
                <label for="checkbox">Remember me</label>
            </div>

            @error('failed')
                <p class="error">{{ $message }}</p>
            @enderror
            
            {{-- Submit Button --}}
            <button class="btn">Login</button>

        </form>
    </div>
</x-layout>
