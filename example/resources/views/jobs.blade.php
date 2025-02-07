<x-layout>
  <x-slot:heading>
    Jobs Listings
  </x-slot:heading>

  <ul class="space-y-4">
    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="block p-4 border border-gray-200 rounded-md">
          <div class="text-sm text-rose-500 mb-2 font-bold">
            {{$job->employer->name}}
          </div>
          <div><strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.</div>
          @if ($job->tags->count() > 0)
            <div
          class="text-sm text-white bg-blue-700 px-2 py-1/4 rounded-md inline-flex items-center justify-center">
              {{$job->tags->pluck('name')->join(', ')}}
            </div>
          @endif
        </a>
    @endforeach
  </ul>
</x-layout>