<x-layout>
  <x-slot:heading>
    Create a new account
  </x-slot:heading>

  <div class="max-w-3xl mx-auto px-4">
    <form method="POST" action="/register">
      @csrf
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for="name">Name</x-form-label>
              <x-form-input name="name" id="name" placeholder="Name" required />
              <x-form-error name="name" />
            </x-form-field>

            <x-form-field>
              <x-form-label for="email">Email</x-form-label>
              <x-form-input name="email" id="email" placeholder="Email" required />
              <x-form-error name="email" />
            </x-form-field>

            <x-form-field>
              <x-form-label for="password">Password</x-form-label>
              <x-form-input name="password" id="password" placeholder="Password" required />
              <x-form-error name="password" />
            </x-form-field>

            <x-form-field>
              <x-form-label for="password_confirmation">Password Confirmation</x-form-label>
              <x-form-input name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation"
                required />
              <x-form-error name="password_confirmation" />
            </x-form-field>

          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <x-form-button>Register</x-form-button>
      </div>
    </form>
  </div>
</x-layout>
