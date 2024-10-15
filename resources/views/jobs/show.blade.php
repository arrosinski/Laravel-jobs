<x-layout>
    <x-slot:heading>
        Job Details Page
    </x-slot:heading>

    <x-slot name="title">
        Job Listing
    </x-slot>
    <ul>
        <li>{{ $job->title }}</li>
        <li>{{ $job->description }}</li>
        <li> {{ $job->salary }}</li>
    </ul>
    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>
