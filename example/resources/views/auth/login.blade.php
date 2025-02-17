<x-layout>
  <x-slot:heading>
    Log in to your account
  </x-slot:heading>

  <div class="max-w-3xl mx-auto px-4">
    <form method="POST" action="/login">
      @csrf
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            <x-form-field>
              <x-form-label for="email">Email</x-form-label>
              <x-form-input name="email" id="email" placeholder="Email" required :value="old('email')" />
              <x-form-error name="email" />
            </x-form-field>

            <x-form-field>
              <x-form-label for="password">Password</x-form-label>
              <x-form-input name="password" id="password" placeholder="Password" required :value="old('password')" />
              <x-form-error name="password" />
            </x-form-field>

          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <x-form-button>Log in</x-form-button>
      </div>
    </form>
  </div>
</x-layout>
