<div>
    <div class="title d-flex align-items-center justify-content-between">
        <h6 class="av-hadith m-0">عدد النتائج : <span>{{ $hadiths->total() }} خديث</span></h6>
    </div>
    {{ $hadiths->render() }}
    <ul class="list-unstyled m-0 p-0">
        @foreach ($hadiths as $hadith)
        <li class="hadith-item ">
            <div class="hadith-item-content">
                <a href="{{ route('hadith.show' , ['hadith' => $hadith]) }}">
                    <p class="hadith-item-content-inner text-right">
                        {!! highlightSearch(str_limit($hadith->search_term, 250) , $term) !!}
                    </p>
                </a>
            </div>
        </li>
        @endforeach
    </ul>
    <hr>
    {{ $hadiths->render() }}
</div>
