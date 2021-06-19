@extends('layout.main')

@section('content')
<div class="projects-section">
    <section class="hadiths-page page">
        <div class="title d-flex align-items-center justify-content-between">
            @if (!empty($hadith->title))
            <h5 class="title-text">
                حديث {{ $hadith->title }}
            </h5>
            @endif
            <h4>
                من كتاب
                <a href="{{ route('book.show' , ['book' => $hadith->book]) }}" >
                    {{ $hadith->book->name }}
                </a>
            </h4>
        </div>
        <div class="hadith-item-content text-right hadith-item ">
            <h4>
                الحديث :
            </h4>
            <p class="hadith-item-content-inner text-right">
                {{ $hadith->hadith }}
            </p>
        </div>
        <hr>
        <div class="hadith-item-content text-right hadith-item ">
            <h4>
                التفسير :
            </h4>
            <p class="hadith-item-content-inner text-right">
                {{ $hadith->description }}
            </p>
        </div>

    </section>
</div>
@endsection
