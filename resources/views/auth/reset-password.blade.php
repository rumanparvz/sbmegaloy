{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout> 
          
    <form style="margin-bottom: 100px" class="loginform" method="POST" action="{{route('password.update')}}">
        @csrf
        <input type="hidden" name="token" value="{{ $request->route('token') }}">
          <div class="form-group">
            <label class="lead" for="email"> Email</label>
            <input type="email" name="email" class="form-control frminput" id="number" placeholder="Enter Your email" required autofocus> 
          </div>
          <div class="form-group">
            <label class="lead" for="password"> Password</label>
            <input type="password" name="password" class="form-control frminput" id="number" placeholder="Enter Your password" required autofocus > 
          </div>
          <div class="form-group">
            <label class="lead" for="password_confirmation"> Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control frminput" id="number" placeholder="Enter Your Password" required autofocus > 
          </div>
    
        <button type="submit" class="btn btn-primary loginbtn btn-block">Submit </button>
      </form>
</x-guest-layout>
