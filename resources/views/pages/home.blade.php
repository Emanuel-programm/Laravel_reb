<x-layout>
  <h2 class="text-center text-3xl mb-4 font-bold">Recent Jobs</h2>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    @forelse($jobs as $job)
      <x-job-card :job="$job" />
    @empty
      <p>No jobs found</p>
    @endforelse
  </div>

  <!-- Link to all jobs -->
  <a href="{{ route('jobs.index') }}" class="block text-xl text-center">
    <i class="fa fa-arrow-alt-circle-right"></i> Show All Jobs
  </a>

  <!-- Reuse our bottom banner -->
  <x-bottom-banner />
</x-layout>