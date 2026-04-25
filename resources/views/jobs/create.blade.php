
<x-layout>
  <x-slot name="title"> Create Job </x-slot>
  <h1>Create Job</h1>
  <form action="/jobs" method="POST">
    @csrf
    <input type="text" value="{{ old('title') }}" name="title" placeholder="Title" />
    @error('title')
    <div class="text-red-500 text-sm">{{$message}}</div>
    @enderror
    <input type="text" value="{{ old('description') }}" name="description" placeholder="Description" />
    @error('description')
    <div class="text-red-500 text-sm">{{$message}}</div>
    @enderror
    <button type="submit">Submit</button>
  </form>
</x-layout>

{{-- @endsection --}}