 <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.1.8/js/intlTelInput.min.js"></script>
 <style>

 @import url(https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.1.8/css/intlTelInput.css);

 </style>
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label for="cnum" :value="__('Phone Number')" />
            <x-text-input id="phone-number" class="block mt-1 w-full" type="tel" name="cnum" :value="old('cnum')" required autocomplete="tel" />
            <script>
  var phoneInput = document.getElementById('phone-number');
  var phoneInputOptions = {
    initialCountry: 'ke',
  };
  intlTelInput(phoneInput, phoneInputOptions);
</script>
            <x-input-error :messages="$errors->get('cnum')" class="mt-2" />
        </div>

        <!-- Location -->
        <div class="mt-4">
            <x-input-label for="city" :value="__('City')" />
            <select name="city">
  <option value="">Select a city</option>
  <option value="Nairobi">Nairobi</option>
  <option value="Mombasa">Mombasa</option>
  <option value="Kisumu">Kisumu</option>
  <option value="Nakuru">Nakuru</option>
  <option value="Eldoret">Eldoret</option>
  <option value="Nyeri">Nyeri</option>
  <option value="Naivasha">Naivasha</option>
  <option value="Meru">Meru</option>
  <option value="Kakamega">Kakamega</option>
  <option value="Machakos">Machakos</option>
  <option value="Thika">Thika</option>
  <option value="Nanyuki">Nanyuki</option>
  <option value="Malindi">Malindi</option>
  <option value="Lamu">Lamu</option>
  <option value="Kitale">Kitale</option>
  <option value="Voi">Voi</option>
  <option value="Nanyanga">Nanyanga</option>
  <option value="Narok">Narok</option>
  <option value="Kericho">Kericho</option>
</select>
            <x-input-error :messages="$errors->get('city')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="estate" :value="__('Estate')" />
            <x-text-input id="estate" class="block mt-1 w-full" type="text" name="estate" :value="old('estate')" required autocomplete="address-level1" />
            <x-input-error :messages="$errors->get('estate')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-label for="password" :value="__('-8 characters')" />
            <x-input-label for="password" :value="__('-Contain a symbol')" />
            <x-input-label for="password" :value="__('-Contain a number')" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
