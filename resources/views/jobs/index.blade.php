
{{-- @extends('layout')
@section('content') --}}
<x-layout>
     <x-slot:title> Job List </x-slot>
  <ul>
    @forelse($jobs as $job)
    <li>{{ $job }}</li>
    @empty
    <li>No jobs found</li>
    @endforelse
  </ul>
</x-layout>

{{-- 
@endsection --}}


    
