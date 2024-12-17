@props(['employer', 'width' => 90])

<img src="{{ $employer->logo ? asset('storage/' . $employer->logo) : asset('images/default-logo.png') }}" alt="Employer Logo" class="rounded-xl" width="42">

