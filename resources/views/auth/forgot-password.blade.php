{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
<x-guest-layout> 
            @if (session('status'))
                <p class="lead"> {{session('status')}}</p>
     
                
            @endif      
    <form style="margin-bottom: 100px" class="loginform" method="POST" action="{{route('password.email') }}">
        @csrf
          <div class="form-group">
            <label class="lead" for="email"> email</label>
            <input type="email" name="email" class="form-control frminput" id="number" placeholder="Enter Your email" required autofocus autocomplete="email" value="{{old('email')}}"> 
          </div>
    
        <button type="submit" class="btn btn-primary loginbtn btn-block">Send </button>
      </form>
    </x-guest-layout>