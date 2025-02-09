<x-layout>
  <x-slot:heading>
    Create a new job
  </x-slot:heading>

  <div class="max-w-3xl mx-auto px-4">
    <form method="POST" action="/jobs">
      @csrf
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for="title">Title</x-form-label>
              <x-form-input name="title" id="title" placeholder="Job Title" />
              <x-form-error name="title" />
            </x-form-field>

            <x-form-field>
              <x-form-label for="salary">Salary</x-form-label>
              <x-form-input name="salary" id="salary" placeholder="$10,000 - $20,000" />
              <x-form-error name="salary" />
            </x-form-field>

            <x-form-field>
              <x-form-label for="description">Description</x-form-label>
              <x-form-textarea name="description" id="description" rows="3"></x-form-textarea>
              <x-form-error name="description" />
            </x-form-field>

          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
        <x-form-button>Save</x-form-button>
      </div>
    </form>
  </div>
</x-layout>
