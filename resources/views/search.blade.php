@extends('layout.main')

@section('content')
<div class="projects-section">
    <section class="hadiths-page page">
        <div class="title d-flex align-items-center justify-content-between">
            <h5 class="title-text">
                <p>البحث عن : {{ $term }}</p>
            </h5>
        </div>
        @livewire('hadith.search', ['term' => $term])
    </section>
</div>
@endsection
