<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <x-slot name="title">
        Job Listings
    </x-slot>
    <ul>
    @foreach ($jobs as $job)
          <li>
              <a class="text-blue-500 hover:underline" href="/jobs/{{ $job['id'] }}">
        {{ $job['title'] }}
        Description {{ $job['description'] }}
          Pays : {{ $job['salary'] }}
              </a>
          </li>
    @endforeach
    </ul>
</x-layout >
