<x-layout>
  <x-slot:heading>
    Edit Job: {{ $job->title }}
  </x-slot:heading>

  <div class="max-w-3xl mx-auto px-4">
    <form method="POST" action="/jobs/{{ $job->id }}">
      @csrf
      @method('PATCH')
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
              <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
              <div class="mt-2">
                <div
                  class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <input type="text" name="title" id="title"
                    class="block min-w-0 grow py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                    placeholder="Job Title" value="{{ $job->title }}">
                </div>
                @error('title')
                  <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
              </div>
            </div>

            <div class="sm:col-span-4">
              <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
              <div class="mt-2">
                <div
                  class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                  <input type="text" name="salary" id="salary" value="{{ $job->salary }}"
                    class="block min-w-0 grow py-1.5 px-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                    placeholder="$10,000 - $20,000">
                </div>
                @error('salary')
                  <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
              </div>
            </div>

            <div class="col-span-full">
              <label for="description" class="block text-sm/6 font-medium text-gray-900">Description</label>
              <div class="mt-2">
                <textarea name="description" id="description" rows="3"
                  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ $job->description }}</textarea>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="flex items-center justify-between">
        <button form='delete-form' class="text-sm/6 font-semibold text-red-600">Delete</button>
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <button type="submit"
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </div>
    </form>

    <form class="hidden" id="delete-form" method="POST" action="/jobs/{{ $job->id }}">
      @csrf
      @method('DELETE')
    </form>
  </div>
</x-layout>
