@extends('layout.main')

@section('content')
<div class="projects-section">
    <section class="hadiths-page page">
        <div class="title d-flex align-items-center justify-content-between">
            <h5 class="title-text">
                {{ $book->name }}
            </h5>
            <h6 class="av-hadith m-0">عدد الاحاديث المتاحه : <span>{{ $book->hadiths_count }}</span></h6>
        </div>
        @livewire('hadith.book.show', ['book' => $book])
    </section>
</div>
@endsection
