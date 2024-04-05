
<div style="background-image: url('storage/Main Login Page - BG.png'); background-size: cover; background-position: center; height: 100vh; display: flex; justify-content: flex-end; overflow: hidden;">
    <div class="signUp" style="background-color: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; text-align: left; margin-right: 65%; margin-top: 50px; height: 500px; overflow-y: auto; position: relative;">

        <h2>Sign Up</h2>

        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <form wire:submit.prevent="signUp">

            <div style="margin-bottom: 15px;">
                <label for="Photo">Profile Photo</label>
                <input type="file" id="fileInput" wire:model="Photo" accept="image/*" onchange="updateFileName()">
                <span id="fileName" style="display: none;"></span>
                @error('Photo') <span class="error">{{ $message }}</span> @enderror
                @if ($Photo)
                    <div style="position: absolute; top: 20px; right: 20px; text-align: right;">
                        <img src="{{ $Photo->temporaryUrl() }}" alt="Preview" style="max-width: 100px; max-height: 100px; margin-bottom: 5px;">
                    </div>
                @endif
            </div>


            <div style="margin-bottom: 15px;">
                <label for="name">Name</label>
                <input type="text" wire:model="name" required>
                @error('name') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="position">Position</label>
                <input type="text" wire:model="position" required>
                @error('position') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div style="margin-bottom: 15px;">
                <label for="email">Email</label>
                <input type="email" wire:model="email" required>
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div style="margin-bottom: 10px;">
                <label for="phone">Phone Number</label>
                <input type="phone" wire:model="phone" required>
                @error('phone') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div style="margin-bottom: 10px;">
                <label for="password">Password</label>
                <input type="password" wire:model="password" required>
                @error('password') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="login-button" wire:loading.attr="disabled" wire:target="signUp">Sign Up</button>
        </form>
    </div>
</div>
