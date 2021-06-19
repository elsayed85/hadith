@extends('layout.main')

@section('content')
<div class="projects-section">
    <div class="projects-section-header">
        <p>الكتب</p>
    </div>
    <div class="projects-section-line">
        <div class="view-actions">
            <button class="view-btn list-view" title="List View">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-list">
                    <line x1="8" y1="6" x2="21" y2="6"></line>
                    <line x1="8" y1="12" x2="21" y2="12"></line>
                    <line x1="8" y1="18" x2="21" y2="18"></line>
                    <line x1="3" y1="6" x2="3.01" y2="6"></line>
                    <line x1="3" y1="12" x2="3.01" y2="12"></line>
                    <line x1="3" y1="18" x2="3.01" y2="18"></line>
                </svg>
            </button>
            <button class="view-btn grid-view active" title="Grid View">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-grid">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                </svg>
            </button>
        </div>
    </div>
    <div class="project-boxes jsGridView">
        @foreach ($books as $book)
        <div class="project-box-wrapper">
            <div class="project-box" style="background-color: #f3f6fd;"
                onclick="location.href='{{ route('book.show' , ['book' => $book]) }}'">
                <div class="project-box-content-header">
                    <p class="box-content-header">{{ $book->name }}</p>
                    <p class="box-content-subheader">{{ $book->hadiths_count }} حديث</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

