{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }} 
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout> 
    
<div class="container">  
    <div class="row"> 
     
        <div class="col-md-12 ">
            <div class="text-center"> <h2> Login </h2> <br> <span> Via</span></div>
          <div class="d-flex text-center"> 
            <input class="btn btn-lg bg-primary" value="Facebook" type="button">
            <input style="background: rgb(66 133 244);color: white;margin-left: 7%;" class="btn btn-lg ml-5" value="Google" type="button">
          </div>
          <x-jet-validation-errors class="mb-4" />
<form class="loginform" method="POST" action="{{route('login')}}">
    @csrf
    <div class="form-group">
      <label class="lead" for="email"> email</label>
      <input name="email" type="email" class="form-control frminput" id="email" placeholder="Enter Your email" :value="old('email')" required autofocus>
   
     
    </div>
    <div class="form-group">
      <label class="lead" for="password">Password</label>
      <input name="password" type="password" class="form-control frminput" id="exampleInputPassword1" placeholder="Password" required autocomplete="current-password">
      @error('password')
      <div class="alert alert-danger">{{ "password wrong" }}</div>
     @enderror
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
      </div>
    <button type="submit" class="btn btn-primary loginbtn btn-block">Login</button>
    <div class="text-center s-area"> Don't have an account? <span class="text-warning"> <a href="{{'fg'}}"> Sign up</a></span> </div>
    <div class="text-center s-area"> <span class="text-warning"> <a href="{{route('password.request')}}"> Forget Password</a></span> </div>
  </form>
        </div>
    </div>
</div>
</x-guest-layout>