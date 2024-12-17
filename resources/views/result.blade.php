<x-layout>
    <x-page-heading>Results</x-page-heading>
    <div class="mt-6 space-y-4">
        @if($jobs->isEmpty())
            <h1 class="text-white">No jobs found</h1>
        @else
            @foreach($jobs as $job)
                <x-job-card-wide :$job/>
            @endforeach
        @endif
    </div>
</x-layout>
