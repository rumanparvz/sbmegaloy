{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<x-guest-layout> 
    
<div class="container">  
    <div class="row"> 
     
        <div class="col-md-12 ">
            <div style="margin-top: 5%;" class="text-center"> <h2> Create an Account </h2> </div>
            <x-jet-validation-errors class="mb-4" />
            
<form class="loginform" method="POST" action="{{route('register')}}">
    @csrf
    <div class="form-group"> 
      <label class="lead" for="fname">Name</label>
      <input type="text" class="form-control frminput" id="name" name="name" placeholder="Enter Your First Name" required autofocus autocomplete="name" value="{{old('name')}}">
    </div>
   
      <div class="form-group">
        <label class="lead" for="email"> email</label>
        <input type="email" name="email" class="form-control frminput" id="number" placeholder="Enter Your email" required autofocus autocomplete="email" value="{{old('email')}}">
       
      </div>
    <div class="form-group">
      <label class="lead" for="password">Password</label>
      <input type="password" class="form-control frminput" id="password" placeholder="Password" required autocomplete="new-password" name="password">
    </div>
    <div class="form-group">
        <label class="lead" for="repassword">Confirm Password</label>
        <input type="password" class="form-control frminput" id="repassword" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
      </div>
  
    <button type="submit" class="btn btn-primary loginbtn btn-block">Create An Account </button>
    <div class="text-center s-area"> if You have Already an account? <span class="text-warning"> <a href="{{'fg'}}"> Login</a></span> </div>
    {{-- <div class="text-center s-area"> <span class="text-warning"> <a href="{{''}}">  </a></span> </div> --}}
  </form>
        </div>
    </div>
</div>
</x-guest-layout>
