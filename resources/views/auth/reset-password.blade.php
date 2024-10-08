<x-layout>
    <h1 class="title">Reset your password</h1>

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('password.update')}}" method="post">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">
            
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
            <button class="btn">Reset Password</button>

        </form>
    </div>
</x-layout>
