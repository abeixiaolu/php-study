<x-layout>
  <x-slot:heading>
    Job Details
  </x-slot:heading>

  <div class="space-y-4">
    <h2 class="text-2xl font-bold">{{ $job['title'] }}</h2>
    <p>
      This job pays <span class="text-rose-400">{{ $job['salary'] }}</span> per year.
    </p>
    <p class="text-gray-400">{{ $job['description'] }}</p>

    @can('edit-job', $job)
      <x-button-link href="/jobs/{{ $job->id }}/edit">Edit</x-button-link>
    @endcan
  </div>
</x-layout>
