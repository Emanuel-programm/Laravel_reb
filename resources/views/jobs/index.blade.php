
{{-- @extends('layout')
@section('content') --}}
<x-layout>
     <x-slot:title> Job Listings </x-slot>
  <ul>
    @forelse($jobs as $job)
   <a href="{{ route('jobs.show', $job->id) }}">
  
  <li>  {{ $job->title }} </li>
</a>
    @empty
    <li>No jobs found</li>
    @endforelse
  </ul>
   <x-bottom-banner/>
</x-layout>

{{-- 
@endsection --}}


    
