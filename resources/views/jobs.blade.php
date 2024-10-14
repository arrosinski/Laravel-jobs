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
              <a  href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200">
        {{ $job['title'] }}
        Description {{ $job['description'] }}
                  <br>
          Pays : {{ $job['salary'] }}
              </a>
          </li>
    @endforeach
    </ul>
</x-layout >
