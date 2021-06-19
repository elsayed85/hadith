<div>
    <ul class="list-unstyled m-0 p-0">
        @foreach ($hadiths as $hadith)
        <li class="hadith-item ">
            <div class="hadith-item-content">
                <a href="{{ route('hadith.show' , ['hadith' => $hadith]) }}">
                    <p class="hadith-item-content-inner text-right">
                        {{ $hadith->hadith }}
                    </p>
                </a>
            </div>
        </li>
        @endforeach
    </ul>
    <hr>
    {{ $hadiths->render() }}
</div>
